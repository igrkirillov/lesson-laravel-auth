<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CurrentUserController extends Controller
{
    public function index()
    {
        return view('secured.current-user', ["user" => auth()->user()]);
    }
}
