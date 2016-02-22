<?php

namespace App\Http\Controllers;

class DefaultController extends Controller
{
    public function index()
    {
        $results = \DB::select("SELECT * FROM users");
        return view('default.index');
    }
}