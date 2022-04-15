<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPassword extends Controller
{
    public function forgot()
    {
        return view('layouts.forgot');
    }

    public function password(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(60);

        DB::table('password_resets')->insert(
            ['email' => $request->email, 'token' => $token, 'created_at' => Carbon::now()]
        );


        Mail::send('email.resetPass', ['token' => $token], function ($message) use ($request) {
            $message->from('support@yourcompany.com', 'World Of Votts');
            $message->to($request->email);
            $message->subject('Reset Password Notification');
        });
        session()->flash('success', 'We have e-mailed your password reset link!');
        return redirect()->back();
    }
}
