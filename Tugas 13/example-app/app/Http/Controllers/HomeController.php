<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function utama()
   {
    return view('home');
   }

   public function reg()
   {
    return view('halaman.register');
   }

   public function kirim(Request $request )
   {
      dd($request->all());
   }

}
