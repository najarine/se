<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegController extends Controller
{
    function reg(){
        return view('reg');
    }
    function regPost(Request $req){
        $username = $req->input('username');
        $fullname = $req->input('fullname');
        $email = $req->input('email');
        $link_1 = $req->input('link_1');
        $link_2 = $req->input('link_2');
        $link_3 = $req->input('link_3');
        $result = DB::table('users')->insert(['username' => $username, 'name' => $fullname ,'email' => $email, 'link_1' => $link_1, 'link_2' => $link_2, 'link_3' => $link_3]);
        //insert('INSERT INTO 'users'('username', 'name', 'email', 'pwd') VALUES (?, ?, ?, ?)', [$username, $name, $email, $pwd]);
        if($result){
            return "success";
        }
        else{
            return "failed!!!!!";
        }
    }
}
