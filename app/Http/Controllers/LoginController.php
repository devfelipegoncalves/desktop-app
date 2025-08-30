<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index ()
    {
        return view('login');
    }

    public function store()
    {
        var_dump('login');
    }

    public function destroy()
    {
        var_dump('logout');
    }
}
