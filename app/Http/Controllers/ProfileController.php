<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProfileController extends Controller
{
    function profile($user){
        $username = DB::table('users')->where('username', '=', $user)->value('username');
        $name = DB::table('users')->where('username', '=', $user)->value('name');
        $email = DB::table('users')->where('username', '=', $user)->value('email');
        $link_1 = DB::table('users')->where('username', '=', $user)->value('link_1');
        $link_2 = DB::table('users')->where('username', '=', $user)->value('link_2');
        $link_3 = DB::table('users')->where('username', '=', $user)->value('link_3');
        return view('profile', ['usernameKey' => $username, 'nameKey' => $name, 'emailKey' => $email, 'link_1_Key' => $link_1, 'link_2_Key' => $link_2, 'link_3_Key' => $link_3]);

    }
}
