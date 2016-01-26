<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        if (Auth::guest()) {
            return Redirect::to('auth/login');

        } else {
            $data = [
                'first_name' => Auth::user()->first_name,
                'last_name' => Auth::user()->last_name,
                'email' => Auth::user()->email,
                'image' => Auth::user()->image,
            ];
            return view('home', ['data' => $data]);

        }
    }
}
