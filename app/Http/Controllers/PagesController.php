<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }

    public function login(){
        if(Auth::check()){
            return redirect('/dashboard');
        } else {
            return view('pages.login');
        }
    }

    public function register(){
        return view('pages.register');
    }
}
