<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        $userId = Auth::id();
        $user = User::findBy(['id'=>$userId])[0][0];

        return view('dashboard.index', ['user' => $user]);
    }
    
    public function profile(){
        $userId = Auth::id();
        $user = User::findBy(['id'=>$userId])[0][0];
        return view('dashboard.profile', ['user' => $user]);
    }
}
