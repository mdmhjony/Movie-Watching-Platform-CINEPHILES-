<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class watchPartyController extends Controller
{


    function addWatchparty(Request $request)
    {

        $myemail = session('email');

        $myinfo = DB::table('watchparty')
            ->where('ownerEmail', $myemail)
            ->select('*')
            ->first();
        $minutes = date('i');
        $seconds = date('s');

        if (!$myinfo) {

            DB::table('watchparty')->insert([
                'ownerEmail' => $myemail,
                'moviename' => $request->input('moviename'),
                'min' => $minutes,
                'sec' => $seconds,
            ]);
        }

        return response()->json("OKK");
    }

    function loadwatchPartydata()
    {
        $myemail = session('email');

        $myinfo = DB::table('users')
            ->where('email', $myemail)
            ->select('*')
            ->first();

        $mywatchparty = DB::table('watchparty')
            ->where('ownerEmail', $myemail)
            ->select('*')
            ->first();

        if ($mywatchparty) {

            $results = DB::table('movie_infos')->get();

            foreach ($results as $i) {

                if ($i->movie_name == $mywatchparty->moviename) {
                    $mywatchparty = $i;
                    break;
                }
            }
        } else {
            $mywatchparty = '';
        }

        $myfriendlist = $myinfo->friendlist;

        $myfriendlist = explode(",", $myfriendlist);
        $myfriendlistmap = [];
        $friendemail = [];

        $index = 0;
        foreach ($myfriendlist as $i) {



            $friendwatchparty = DB::table('watchparty')
                ->where('ownerEmail', $i)
                ->select('*')
                ->first();

            if ($friendwatchparty) {
                $results = DB::table('movie_infos')->get();

                foreach ($results as $j) {

                    if ($j->movie_name == $friendwatchparty->moviename) {
                        $myfriendlistmap[$index] = $j;
                        $friendemail[$index] = $i;
                        $index++;
                        break;
                    }
                }
            }
        }


        $data = [];
        $data[0] = $mywatchparty;
        $data[1] = $myfriendlistmap;
        $data[2] = $myemail;
        $data[3] = $friendemail;



        return response()->json($data);
    }

    function removeWatchparty()
    {
        $myemail = session('email');

        DB::table('watchparty')->where('ownerEmail', '=', $myemail)->delete();
        return response()->json("deleted");
    }
    function chatstore(Request $request)
    {

        $myemail = session('email');

        $moviename = $request->input('moviename');
        $chats = $request->input('chats');
        $current_time = date("Y-m-d h:i A");
        $ownerEmail = $request->input('ownerEmail');

        $myname = DB::table('users')
            ->where('email', $myemail)
            ->select('*')
            ->first();

        DB::table('chats')->insert([
            'uname' => $myname->name,
            'msg' => $chats,
            'dt' => $current_time,
            'moviename' => $moviename,
            'ownerEmail' => $ownerEmail,
            'chatimg' => $myname->image,
        ]);


        return response()->json("chats");
    }

    function loadWatchParty(Request $request)
    {
        $moviename = $request->input('moviename');
        $ownerEmail = $request->input('ownerEmail');

        $allchats = DB::table('chats')
            ->where('ownerEmail', $ownerEmail)
            ->where('moviename', $moviename)
            ->select('*')
            ->get();
        if (!$allchats) {
            $allchats = '';
        }

        return response()->json($allchats);
    }

    function watchpartyend(Request $request)
    {
        $moviename = $request->input('moviename');
        $ownerEmail = $request->input('ownerEmail');

        DB::table('chats')
            ->where('ownerEmail', $ownerEmail)
            ->where('moviename', $moviename)
            ->delete();

        DB::table('watchparty')
            ->where('ownerEmail', $ownerEmail)
            ->delete();
        return response()->json('end party');
    }
    function starttime(Request $request)
    {

        $ownerEmail = $request->input('ownerEmail');

        $d = DB::table('watchparty')
            ->where('ownerEmail', $ownerEmail)
            ->select('*')
            ->first();
        $data = [];
        $data['min'] = $d->min;

        $data['sec'] = $d->sec;


        return response()->json($data);
    }
}
