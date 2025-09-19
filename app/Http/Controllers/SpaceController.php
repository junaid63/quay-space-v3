<?php

namespace App\Http\Controllers;
use App\Http\Requests\Spacerequest;
use App\Space;
use App\SpaceAmenity;
use App\SpaceType;
use App\Floor;
use App\Amenity;
use Illuminate\Http\Request;

class SpaceController extends Controller
{
    public function space() {
        $user = Space::get();
        $spaceTypes = SpaceType::withstatusget(); 
        $floorDetails = Floor::withstatusget(); 
        $amenityDetails = Amenity::withstatusget(); 
            return view('space', [
                'spaceTypes' => $spaceTypes,
                'floorDetails' => $floorDetails,
                'amenityDetails' => $amenityDetails,
        ]);
    }

    public function space_json()
    {
        $user = Space::fetchForApi();
        return response()->json(['data' => $user]);
    }

    public function space_store(Spacerequest $request)
    {
        // Step 1: Create space
        $space = Space::create([
            'name' => $request->name,
            'capacity' => $request->capacity,
            'price_per_day' => $request->price_per_day,
            'space_type_id' => $request->space_type_id,
            'floor_id' => $request->floor_id,
            'description' => $request->description,
            'status' => 1
        ]);

        // Step 2: Attach amenities (if selected)
        if ($request->has('amenities_id') && is_array($request->amenities_id)) {
            foreach ($request->amenities_id as $amenityId) {
                if (!empty($amenityId)) {
                    SpaceAmenity::create([
                        'space_id' => $space->id,
                        'amenity_id' => $amenityId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

        // Step 3: Return response
        return response()->json([
            'message' => 'Space and amenities added successfully!',
            'data' => $space
        ]);
    }



    public function toggleStatus($id, Request $request)
    {
        $user = Space::findOrFail($id);
        $user->status = $request->status ? 1 : 0;
        $user->save();

        return response()->json([
            'message' => 'Status updated successfully',
            'status' => $user->status
        ]);
    }


    public function show($id)
    {
        return $user = Space::findOrFail($id);

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'capacity' => $user->capacity,
            'price_per_day' => $user->price_per_day,
            'space_type_id' => $user->space_type_id,
            'floor_id' => $user->floor_id,
            'description' => $user->description,
        ]);
    }

    public function update(Spacerequest $request, $id)
    {
        // Step 1: Find the space
        $space = Space::findOrFail($id);

        // Step 2: Update space fields
        $space->update([
            'name' => $request->name,
            'capacity' => $request->capacity,
            'price_per_day' => $request->price_per_day,
            'space_type_id' => $request->space_type_id,
            'floor_id' => $request->floor_id,
            'description' => $request->description,
            'status' => 1,
        ]);

        // Step 3: Sync amenities manually
        if ($request->has('amenities_id') && is_array($request->amenities_id)) {
            // Step 3a: Delete old amenities
            SpaceAmenity::where('space_id', $space->id)->delete();

            // Step 3b: Insert new selected amenities
            foreach ($request->amenities_id as $amenityId) {
                if (!empty($amenityId)) {
                    SpaceAmenity::create([
                        'space_id' => $space->id,
                        'amenity_id' => $amenityId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        } else {
            // No amenities selected, remove all
            SpaceAmenity::where('space_id', $space->id)->delete();
        }

        // Step 4: Return response
        return response()->json(['message' => 'Space and amenities updated successfully']);
    }


    public function destroy($id)
    {
        $space = Space::findOrFail($id);
        SpaceAmenity::where('space_id', $space->id)->delete();
        $space->delete();

        return response()->json([
            'message' => 'Space and its related amenities deleted successfully'
        ]);
    }
}
