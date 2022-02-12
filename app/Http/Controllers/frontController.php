<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index() {
        return view('welcome');
    }

    public function login() {
        return view('auth.login');
    }
}
