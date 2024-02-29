<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
//use App\Models\prestasi;
class pageController extends Controller
{
    
    //
    public function blog()
    {
        $blog = blog::all();
        return view('/page/blog', ['blog' => $blog]);
    }
    //
 //   public function prestasi()
   // {
     //   $prestasi = prestasi::all();
       // return view('/page/prestasi', ['prestasi' => $prestasi]);
    //}
    
}
