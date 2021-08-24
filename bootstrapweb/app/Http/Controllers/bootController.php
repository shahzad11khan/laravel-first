<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bootController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function gallery()
    {
        //
        return view('gallery');
    }

    public function aboutus()
    {
        //
        return view('aboutus');
}
}
