<?php

namespace App\Http\Controllers;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Requests\Servicerequest;

class ServiceController extends Controller
{
    public function service() {
        $services = Service::get();
        return view('service', ['data' => $services]);
    }

    public function service_json()
    {
        $services = Service::fetchForApi();
        return response()->json(['data' => $services]);
    }

    public function service_store(ServiceRequest $request)
    {
        try {
            $folder = 'services/' . date('FY'); 
            $imagePath = null;
            if ($request->hasFile('image') && $request->file('image')->isValid()) {
                $imageName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
                $imagePath = $request->file('image')->storeAs($folder, $imageName, 'public');
            }

            $iconPath = null;
            if ($request->hasFile('icon') && $request->file('icon')->isValid()) {
                $iconName = uniqid() . '.' . $request->file('icon')->getClientOriginalExtension();
                $iconPath = $request->file('icon')->storeAs($folder, $iconName, 'public');
            }

            $service = Service::create([
                'title'  => $request->title,
                'image'  => $imagePath,
                'icon'   => $iconPath,
                'status' => 1,
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Service added successfully!',
                'data'    => $service,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Upload failed: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function toggleStatus($id, Request  $request)
    {
        $services = Service::findOrFail($id);
        $services->status = $request->status ? 1 : 0;
        $services->save();

        return response()->json([
            'message' => 'Status updated successfully',
            'status' => $services->status
        ]);
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);

        $cleanImagePath = $service->image ? str_replace('\\', '/', $service->image) : null;
        $cleanIconPath  = $service->icon ? str_replace('\\', '/', $service->icon) : null;

        $imageUrl = $cleanImagePath
            ? asset('storage/' . ltrim($cleanImagePath, '/'))
            : asset('images/no-image.png');

        $iconUrl = $cleanIconPath
            ? asset('storage/' . ltrim($cleanIconPath, '/'))
            : asset('images/no-icon.png');

        return response()->json([
            'id' => $service->id,
            'title' => $service->title,
            'status' => $service->status,
            'image' => $imageUrl,
            'icon'  => $iconUrl,
        ], 200, [], JSON_UNESCAPED_SLASHES);
    }

    // public function update(ServiceRequest $request, $id)
    // {
    //     $service = Service::findOrFail($id);

    //     $data = [
    //         'title' => $request->title,
    //     ];

    //     // Only update image if a new file is uploaded
    //     if ($request->hasFile('image') && $request->file('image')->isValid()) {

    //         $folder = 'services/' . date('FY');
    //         $imageName = uniqid() . '.' . $request->file('image')->getClientOriginalExtension();
    //         $imagePath = $request->file('image')->storeAs($folder, $imageName, 'public');

    //         $data['image'] = $imagePath;
    //     }

    //     // Only update icon if a new file is uploaded
    //     if ($request->hasFile('icon') && $request->file('icon')->isValid()) {

    //         $folder = 'services/' . date('FY');
    //         $iconName = uniqid() . '.' . $request->file('icon')->getClientOriginalExtension();
    //         $iconPath = $request->file('icon')->storeAs($folder, $iconName, 'public');

    //         $data['icon'] = $iconPath;
    //     }

    //     $service->update($data);

    //     return response()->json(['message' => 'Service updated successfully']);
    // }
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|file|mimes:jpg,jpeg,png,webp|max:2048',
            'icon'  => 'nullable|file|mimes:jpg,jpeg,png,webp,svg|max:2048',
        ]);

        $service->title = $request->title;

        // IMAGE UPDATE ONLY IF USER SELECTED
        if ($request->hasFile('image')) {
            // delete old image
            if ($service->image && file_exists(public_path('uploads/service/' . $service->image))) {
                unlink(public_path('uploads/service/' . $service->image));
            }

            $imageName = time() . '_img.' . $request->image->extension();
            $request->image->move(public_path('uploads/service'), $imageName);
            $service->image = $imageName;
        }

        // ICON UPDATE ONLY IF USER SELECTED
        if ($request->hasFile('icon')) {
            if ($service->icon && file_exists(public_path('uploads/service/' . $service->icon))) {
                unlink(public_path('uploads/service/' . $service->icon));
            }

            $iconName = time() . '_icon.' . $request->icon->extension();
            $request->icon->move(public_path('uploads/service'), $iconName);
            $service->icon = $iconName;
        }

        $service->save();

        return response()->json(['message' => 'Service updated successfully']);
    }


    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return response()->json([
            'message' => 'Floor deleted successfully'
        ]);
    }
}
