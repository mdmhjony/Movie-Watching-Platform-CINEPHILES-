<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\memeinfo;
use Illuminate\Support\Facades\DB;

class MemeController extends Controller
{


    function allData()
    {
        $allmemes = memeinfo::all();
        return response()->json($allmemes);
    }

    function memestore(Request $request)
    {
        $image = $request->input('memeimg');
        $image = str_replace('C:\\fakepath\\', '', $image);


        $memetitle = $request->input('memetitle');


        DB::table('memeinfos')->insert([
            'PostImg' => $image,
            'PostLike' => 0,
            'memetitle' => $memetitle,
            'Time' => now(),
            'email' => 'foyez@emam.com',
            'isvote' => 0
        ]);



        return response()->json(['status' => 'ok']);
    }

    function vote($time)
    {

        $myemail = "foyez@emam.com";

        $row = DB::table('memeinfos')
            ->where('Time', $time)
            ->select('*')
            ->first();

        $memevotecount = $row->PostLike;

        $votetracking = DB::table('votetracking')
            ->where('time', $time)
            ->where('postOwnerEmail', $myemail)
            ->select('*')
            ->first();


        if ($votetracking) {

            DB::table('votetracking')

                ->where('time', $time)
                ->where('postOwnerEmail', '=', $myemail)
                ->delete();
            DB::table('memeinfos')
                ->where('Time', $time)
                ->update(['PostLike' => $memevotecount - 1]);
        } else {

            DB::table('votetracking')->insert([
                'time' => $time,
                'postOwnerEmail' => $myemail
            ]);

            DB::table('memeinfos')
                ->where('Time', $time)
                ->update(['PostLike' => $memevotecount + 1]);
        }

        return response()->json($time);
    }

    function ckvote($time)
    {

        $myemail = "foyez@emam.com";

     

        $votetracking = DB::table('votetracking')
            ->where('time', $time)
            ->where('postOwnerEmail', $myemail)
            ->select('*')
            ->first();

            if ($votetracking) {

                return response()->json(['status' => 'Downvote']);

            }
            else{

                return response()->json(['status' => 'Upvote']);
            }
    }
}
