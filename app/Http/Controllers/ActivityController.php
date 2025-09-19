<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Http\Requests\Activityrequest;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function activity() {
        $activity = Activity::get();
        return view('activity', ['activity' => $activity]);
    }

    public function activity_json()
    {
        $activity = Activity::fetchForApi();
        return response()->json(['data' => $activity]);
    }

    public function activity_store(Activityrequest $request){
        $activity = Activity::create([
            'title' => $request->title,
            'price' => $request->price,
            'status' => 1
        ]);

        return response()->json([
            'message' => 'Activity added successfully!',
            'data' => $activity
        ]);        
    }

    public function toggleStatus($id, Request $request)
    {
        $activity = Activity::findOrFail($id);
        $activity->status = $request->status ? 1 : 0;
        $activity->save();

        return response()->json([
            'message' => 'Status updated successfully',
            'status' => $activity->status
        ]);
    }

    public function show($id)
    {
        return Activity::findOrFail($id);
    }

    public function update(Activityrequest $request, $id)
    {
        $activity = Activity::findOrFail($id);
        $activity->update(['title' => $request->title , 'price' => $request->price]);

        return response()->json(['message' => 'Activity updated successfully']);
    }

    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);
        $activity->delete();

        return response()->json([
            'message' => 'Activity deleted successfully'
        ]);
    }
}
