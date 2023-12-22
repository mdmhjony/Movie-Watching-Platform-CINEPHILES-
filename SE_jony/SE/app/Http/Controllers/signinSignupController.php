<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

class signinSignupController extends Controller
{
    function signup(Request $request)
    {
        $name = $request->input('typeFullName');
        $typeEmailX = $request->input('typeEmailX');
        $typePasswordX = $request->input('typePasswordX');
        $typeConfirmPassword = $request->input('typeConfirmPassword');

        // $alluser = user::all();
        if ($typePasswordX == $typeConfirmPassword) {

            DB::table('users')->insert([
                'name' => $name,
                'email' => $typeEmailX,
                'password' => $typePasswordX,
                'favorites' => '...',
                'recent' => '...',
                'watchlist' => '...',
                'image' => 'profile.jpg',
                'friendlist' => '...',
                'sentreq' => '...',
                'friendreq' => '...',
                'bio' => 'hello',
                'watchlistp' => '...',
                'favoritesp' => '...',
                'recentlyp' => '...',
                'friendmeme' => '...',
                'memep' => '...',
            ]);
        }
        return response()->json(['status' => "ok"]);
    }

    function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password'); 
       
        $row = DB::table('users')
            ->where('email', $email)
            ->where('password', $password)
            ->select('*')
            ->first();


           
           if($row){ 
            
            session(['email' => $email]);

            return response()->json(['status' => 'ok']);
        }

            
      

        
    }
}
