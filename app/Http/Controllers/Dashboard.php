<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\User;
use App\Models\Votes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Dashboard extends Controller
{
    public function dashb(Request $request)
    {
        $validUser = auth()->user()->id;
        $query = DB::table('infos')->where('user_id', $validUser)->first();
        $keyy = DB::table('keys')->where('user_id', $validUser)->first();
        $vtct1 = DB::table('votes')->where('cand_id', $validUser)->sum('votesNo');


        return view('dashboard.dashboard', ['query' => $query, 'keyy' => $keyy, 'vtct1' => $vtct1]);
    }


    public function prof(Request $request)
    {
        $validUser = auth()->user()->id;
        $cid = DB::table('infos')->where('user_id', $validUser)->first();
        $vtct1 = DB::table('votes')->where('cand_id', $validUser)->sum('votesNo');



        return view('dashboard.profilee', ['cid' => $cid, 'vtct1' => $vtct1]);
    }


    public function dashv(Request $request)
    {
        $validUser = auth()->user()->id;
        $votid = DB::table('keyvs')->where('user_id', $validUser)->first();
        $cands = Info::all();



        return view('voter.dashboard', ['votid' => $votid, 'cands' => $cands]);
    }

    public function fvprof(Request $request, $slug, $user_id)
    {
        $cprof = Info::find($user_id);
        $vtct = DB::table('votes')->where('cand_id', $cprof->user_id)->sum('votesNo');


        return view('layouts.fvprofile', ['cprof' => $cprof, 'vtct' => $vtct, 'cimg' => $cimg]);
    }

    public function fv(Request $request, $user_id)
    {
        $vprof = Info::find($user_id);
        return view('layouts.voting', ['vprof' => $vprof]);
    }
}
