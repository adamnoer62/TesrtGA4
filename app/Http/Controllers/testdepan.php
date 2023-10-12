<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testdepan extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function halaman1()
    {
    $coba = "oke";
    return view('halaman1' , compact('coba'));
    }

     public function halaman2()
    {
    return view('halaman2');
    }

     public function halaman3()
    {
    return view('halaman3');
    }
     public function halaman4()
    {
    return view('halaman4');
    }
}
