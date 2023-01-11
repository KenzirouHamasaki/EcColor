<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanxController extends Controller
{
    public function index()
    {
        return view('thanx.index');
    }
}
