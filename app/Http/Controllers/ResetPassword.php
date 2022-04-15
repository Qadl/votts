<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ResetPassword extends Controller
{
    public function getPassword($token)
    {
        return view('layouts.resetPass', ['token' => $token]);
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'email' => "email|required|exists:users",
            'password' => "required|max:14|min:4|confirmed",

        ]);

        $updatePassword = DB::table('password_resets')
            ->where(['email' => $request->email, 'token' => $request->token])
            ->first();



        if (!$updatePassword) {
            session()->flash('error', 'Invalid Login Details');
            return redirect()->back();
        }
        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        session()->flash('success', 'Your password has been changed,log in now');
        return redirect()->route('login');
    }
}
