<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
class LoginController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'userid' => 'required|exists:logins,userid',
            'password' => 'required',
        ]);

        $userid = $request->userid;
        $password = $request->password;

        $user = Login::where('userid', $userid)->first();

        if (!$user) {
            return redirect("/")->with('exist', 'User does not exist!');
        } else {
            if (password_verify($password, $user->password)) {
                $request->session()->put('USER',$user->username);
                $request->session()->put('USER-ID', $user->userid);
                $request->session()->put('IP', $_SERVER['REMOTE_ADDR']);
                return redirect('/dashboard');
            } else {
                return redirect("/")->with('Incorrect', 'Incorrect password!');
            }
        }
    }

    public function logout(Request $request)
    {
        $request->session()->forget('USER-ID');
        $request->session()->flush();
        return redirect('/')->with('logout', 'You have successfully logged out');
    }

}
