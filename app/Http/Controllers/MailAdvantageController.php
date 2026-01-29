<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailAdvantageController extends Controller
{
    public function floor() {
        $user = MailingAdvantage::get();
        return view('mailing', ['mailing' => $user]);
    }

    // public function floor_json()
    // {
    //     $user = Floor::fetchForApi();
    //     return response()->json(['data' => $user]);
    // }

    // public function floor_store(Floorrequest $request){
    //     $user = Floor::create([
    //         'name' => $request->name,
    //         'number' => $request->number,
    //         'status' => 1
    //     ]);

    //     return response()->json([
    //         'message' => 'Floor added successfully!',
    //         'data' => $user
    //     ]);        
    // }

    // public function toggleStatus($id, Request $request)
    // {
    //     $user = Floor::findOrFail($id);
    //     $user->status = $request->status ? 1 : 0;
    //     $user->save();

    //     return response()->json([
    //         'message' => 'Status updated successfully',
    //         'status' => $user->status
    //     ]);
    // }

    // public function show($id)
    // {
    //     $user = Floor::findOrFail($id);

    //     return response()->json([
    //         'id' => $user->id,
    //         'name' => $user->name,
    //         'number' => $user->number,
    //     ]);
    // }

    // public function update(Floorrequest $request, $id)
    // {
    //     $user = Floor::findOrFail($id);
    //     $data = [
    //         'name' => $request->name,
    //         'number' => $request->number,
    //         'status' => 1,
    //     ];
    //     $user->update($data);
    //     return response()->json(['message' => 'Floor updated successfully']);
    // }

    // public function destroy($id)
    // {
    //     $user = Floor::findOrFail($id);
    //     $user->delete();

    //     return response()->json([
    //         'message' => 'Floor deleted successfully'
    //     ]);
    // }
}