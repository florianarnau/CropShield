<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerDashboard extends Controller
{
    public function index()
    {
        $user_role = Auth::user()->role;
        return view('dashboard', compact('user_role'));
    }
}
