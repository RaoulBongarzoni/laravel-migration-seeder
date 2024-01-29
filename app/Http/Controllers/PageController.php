<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{

    public function index()
    {
        $test = 42;
        $trains = Train::all();

        return view('home', compact('test', 'trains'));
    }
    //
}
