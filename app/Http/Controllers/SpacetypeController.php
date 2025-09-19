<?php

namespace App\Http\Controllers;
use App\Http\Requests\SpaceTyperequest;
use App\SpaceType;
use Illuminate\Http\Request;

class SpacetypeController extends Controller
{
    public function spacetype() {
        $user = SpaceType::get();
        return view('spacetype', ['spacetype' => $user]);
    }

    public function floor_json()
    {
        $user = SpaceType::fetchForApi();
        return response()->json(['data' => $user]);
    }

    public function floor_store(SpaceTyperequest $request){
        $user = SpaceType::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => 1
        ]);

        return response()->json([
            'message' => 'Space Type added successfully!',
            'data' => $user
        ]);        
    }

    public function toggleStatus($id, Request $request)
    {
        $user = SpaceType::findOrFail($id);
        $user->status = $request->status ? 1 : 0;
        $user->save();

        return response()->json([
            'message' => 'Status updated successfully',
            'status' => $user->status
        ]);
    }

    public function show($id)
    {
        $user = SpaceType::findOrFail($id);

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'description' => $user->description,
        ]);
    }

    public function update(SpaceTyperequest $request, $id)
    {
        $user = SpaceType::findOrFail($id);
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];
        $user->update($data);
        return response()->json(['message' => 'Space Type updated successfully']);
    }

    public function destroy($id)
    {
        $user = SpaceType::findOrFail($id);
        $user->delete();

        return response()->json([
            'message' => 'Space Type deleted successfully'
        ]);
    }
}