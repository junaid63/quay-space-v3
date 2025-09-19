<?php

namespace App\Http\Controllers;

use App\Funding;
use App\Http\Requests\Fundingrequest;
use Illuminate\Http\Request;

class FundingController extends Controller
{
    public function fundings() {
        $funding = Funding::get();
        return view('funding', ['funding' => $funding]);
    }

    public function fundings_json()
    {
        $funding = Funding::fetchForApi();
        return response()->json(['data' => $funding]);
    }

    public function fundings_store(Fundingrequest $request){
        $funding = Funding::create([
            'title' => $request->title,
            'status' => 1
        ]);

        return response()->json([
            'message' => 'Funding added successfully!',
            'data' => $funding
        ]);        
    }

    public function toggleStatus($id, Request $request)
    {
        $funding = Funding::findOrFail($id);
        $funding->status = $request->status ? 1 : 0;
        $funding->save();

        return response()->json([
            'message' => 'Status updated successfully',
            'status' => $funding->status
        ]);
    }

    public function show($id)
    {
        return Funding::findOrFail($id);
    }

    public function update(Fundingrequest $request, $id)
    {
        $funding = Funding::findOrFail($id);
        $funding->update(['title' => $request->title]);

        return response()->json(['message' => 'Funding updated successfully']);
    }

    public function destroy($id)
    {
        $funding = Funding::findOrFail($id);
        $funding->delete();

        return response()->json([
            'message' => 'Funding deleted successfully'
        ]);
    }
}
