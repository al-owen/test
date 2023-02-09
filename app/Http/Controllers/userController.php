<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{

    public function validarLogin(Request $r){
        $data = $r->input();
        $r->session()->put('user', $data['user']);
        return view('home');
    }

    public function logout(Request $r){
        $r->session()->flush();
        return view('home');
    }

}
