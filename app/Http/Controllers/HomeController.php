<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{

    // retorna la view Home.userpage
    public function index()
    {
        return view('home.userpage');
    }

    //dependiendo el tipo de usuario redirige a Admin.home o a Dashboard

    public function redirect()
    {
        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return view('admin.home');
        } else {
            return view('home.userpage');
        }
    }
}
