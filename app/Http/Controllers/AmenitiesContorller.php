<?php

namespace App\Http\Controllers;
use App\Http\Requests\Amenityrequest;
use App\Amenity;
use Illuminate\Http\Request;

class AmenitiesContorller extends Controller
{
    public function amenities() {
        $user = Amenity::get();
        return view('amenities', ['amenities' => $user]);
    }

    public function amenities_json()
    {
        $user = Amenity::fetchForApi();
        return response()->json(['data' => $user]);
    }

    public function amenities_store(Amenityrequest $request){
        $user = Amenity::create([
            'name' => $request->name,
            'status' => 1
        ]);

        return response()->json([
            'message' => 'Amenities added successfully!',
            'data' => $user
        ]);        
    }

    public function toggleStatus($id, Request $request)
    {
        $user = Amenity::findOrFail($id);
        $user->status = $request->status ? 1 : 0;
        $user->save();

        return response()->json([
            'message' => 'Status updated successfully',
            'status' => $user->status
        ]);
    }

    public function show($id)
    {
        $user = Amenity::findOrFail($id);

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
        ]);
    }

    public function update(Amenityrequest $request, $id)
    {
        $user = Amenity::findOrFail($id);
        $data = [
            'name' => $request->name,
            'status' => 1,
        ];
        $user->update($data);
        return response()->json(['message' => 'Amenities updated successfully']);
    }

    public function destroy($id)
    {
        $user = Amenity::findOrFail($id);
        $user->delete();

        return response()->json([
            'message' => 'Amenities deleted successfully'
        ]);
    }
}