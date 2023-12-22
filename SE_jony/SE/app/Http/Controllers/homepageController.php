<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie_info;
use App\Models\memeinfo;
use Illuminate\Support\Facades\DB;
class homepageController extends Controller
{
    function index()
    {

        $users = movie_info::all();

        $slidermovies = [];
        $cnt = 0;

        foreach ($users as $i) {

            $slidermovies[] = $i;
            $cnt++;
            if ($cnt >= 4) {
                break;
            }
        }

        $SCIENCEFICTION =DB::table('movie_infos')
            ->where('genres', 'SCIENCE FICTION')
            ->select('*')
            ->get();
            $COMEDY =DB::table('movie_infos')
            ->where('genres', 'COMEDY')
            ->select('*')
            ->get();

            $DRAMA =DB::table('movie_infos')
            ->where('genres', 'DRAMA')
            ->select('*')
            ->get();

            
            $HORROR =DB::table('movie_infos')
            ->where('genres', 'HORROR')
            ->select('*')
            ->get();

            $newmovies = DB::table('movie_infos')
                ->where('release_year', '>', 2005)
                ->select('*')
                ->get();
            $oldmovies = DB::table('movie_infos')
                ->where('release_year', '<', 2005)
                ->select('*')
                ->get();

                  




        return view('index', [
            'users' => $users,
            'slider' => $slidermovies,
             'newmovies'=>$newmovies,
             'oldmovies'=>$oldmovies,
             'DRAMA'=>$DRAMA,
             'HORROR'=>$HORROR,
             'COMEDY'=>$COMEDY,
             'SCIENCEFICTION'=>$SCIENCEFICTION,



        ]);
    }


    public function play(Request $request)
    {
        $video = $request->input('video');
        return view('streaming', ['video' => $video]);
    }
    function loadDetails(Request $request)
    {

        $moviename = $request->input('moviename');
        $allmovie = movie_info::all();
        $res = "empty";
        foreach ($allmovie as $i) {
            if ($i->movie_name == $moviename) {
                $res = $i;
                break;
            }
        }

        return response()->json($res);
    }
}
