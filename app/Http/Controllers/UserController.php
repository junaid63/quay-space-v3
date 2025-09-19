<?php

namespace App\Http\Controllers;

use App\Http\Requests\Userrequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user() {
        $user = User::get();
        return view('user', ['user' => $user]);
    }

    public function user_json()
    {
        $user = User::fetchForApi();
        return response()->json(['data' => $user]);
    }

    public function user_store(Userrequest $request){
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role_id' => 2,
            'status' => 1
        ]);

        return response()->json([
            'message' => 'User added successfully!',
            'data' => $user
        ]);        
    }

    public function toggleStatus($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->status = $request->status ? 1 : 0;
        $user->save();

        return response()->json([
            'message' => 'Status updated successfully',
            'status' => $user->status
        ]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);

        return response()->json([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
        ]);
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'status' => 1,
        ];
        if (!empty($request->password)) {
            $data['password'] = bcrypt($request->password);
        }
        $user->update($data);
        return response()->json(['message' => 'User updated successfully']);
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'message' => 'User deleted successfully'
        ]);
    }
}
