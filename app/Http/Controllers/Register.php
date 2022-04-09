<?php

namespace App\Http\Controllers;

use App\Models\Imageadd;
use App\Models\Info;
use App\Models\Key;
use App\Models\Keyv;
use App\Models\User;
use App\Models\Votes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Register extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'email' => "email|required|unique:users",
            'password' => "required|max:10|min:4",
            'roles' => "required"
        ]);

        $user = User::create([

            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => $request->roles,

        ]);

        Auth::loginUsingId($user->id);

        session()->flash('success', 'You have been registered successfully!');

        if ($request->user()->roles === "voter") {
            return redirect()->route('secretv');
        }

        return redirect()->route('addInfo');
    }

    public function login(Request $request)
    {
        $token = auth()->attempt(['email' => $request->email, 'password' => $request->password]);

        if (!$token) {
            session()->flash('error', 'Invalid Login Details');
            return redirect()->back();
        }
        if ($request->user()->roles === "voter") {
            return redirect()->route('dashv');
        }

        return redirect()->route('dashboard');
    }



    public function addInfo(Request $request)
    {
        $request->validate([
            'fName' => "required",
            'lName' => "required",
            'age' => "required",
            'nick' => "required|max:10|min:4",
            'mNumber' => "required|max:11|min:3",
            'image' => "required|mimes:jpg,png,jpeg|max:5048",

        ]);

        $newImagename = 'VTS' . uniqid() . '.' . $request->image->extension();
        $request->image->move('uploads/images/', $newImagename);



        $user = Info::create([
            'fName' => $request->fName,
            'lName' => $request->lName,
            'age' => $request->age,
            'nick' => $request->nick,
            'user_id' => Auth::id(),
            'mNumber' => $request->mNumber,
            'image' => $newImagename,


        ]);


        session()->flash('success', 'Info added succesfully!');
        return redirect()->route('secret');
    }

    public function addKey(Request $request)
    {

        $request->validate([
            'secret' => "required",

        ]);

        $user = Key::create([
            'secret' => $request->secret,

            'user_id' => Auth::id(),
        ]);

        session()->flash('success', 'Key added succesfully!');
        return redirect()->route('dashboard');
    }



    public function snap(Request $request)
    {


        $request->validate([
            'image' => "required|mimes:jpg,png,jpeg|max:5048",

        ]);

        $newImagename = 'VTS' . uniqid() . '.' . $request->image->extension();
        $request->image->move('uploads/images/', $newImagename);

        $img = Imageadd::create([
            'image' => $newImagename,
            'user_id' => auth()->user()->id,
        ]);

        session()->flash('success', 'Image added succesfully!');
        return redirect()->route('dashboard');
    }


    public function vKey(Request $request)
    {

        $request->validate([
            'secretv' => "required",
            'fName' => "required",
            'lName' => "required"

        ]);

        $user = Keyv::create([
            'fName' => $request->fName,
            'lName' => $request->lName,
            'secretv' => $request->secretv,

            'user_id' => Auth::id(),
        ]);

        session()->flash('success', 'Voter registered succesfully!');
        return redirect()->route('dashv');
    }


    public function vv(Request $request, $id)
    {

        $user = Votes::create([
            'votesNo' => $request->votesNo,
            'cand_id' => $request->cand_id,
            'voter_id' => Auth::id(),
        ]);

        session()->flash('success', 'Voter registered succesfully!');
        return redirect()->route('dashv');
    }

    public function ed($id)
    {
        $inf = Info::find($id);
    }
}
