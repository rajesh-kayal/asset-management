<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getAllUser()
    {
        $user = User::get();
        return view('user')->with(['user' => $user]);
    }
    public function edituser($id)
    {
        $user = user::where('id', $id)->first();
        return view('edit.edit_user')->with(['user' => $user]);
    }
    public function updateUser(Request $request, $id)
    {

        $user = User::findOrFail($id);

        // Update user data
        $user->update([
            'name' => $request->name,
            'designation' => $request->designation,
            'phone_number' => $request->phoneNumber,
            'asset' => $request->asset
        ]);

        // Redirect back to the user list or any other page you prefer
        return redirect('/user')->with('success', 'User updated successfully');
    }

    public function viewuser($id)
    {
        $user = user::where('id', $id)->first();
        return view('view.view_user')->with(['user' => $user]);
    }

    public function saveUser(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required',
        //     'phone_number' => 'required',
        //     'designation' => 'required',
        //     'asset' => 'required',
        // ]);

        $user = new User();
        $user->name = $request->name;
        $user->phone_number = $request->phoneNumber;
        $user->designation = $request->designation;
        $user->asset = $request->asset;

        if ($user->save()) {
            return redirect('/user')->with(['message' => 'success']);
        } else {
            return redirect('/add_user')->with(['message' => 'error']);
        }
    }
}
