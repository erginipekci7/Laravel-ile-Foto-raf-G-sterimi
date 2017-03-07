<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function fotogoster(){
    	$resim="Batman.jpg";
    	$diziResim= array("Batman.jpg","Spiderman.jpg","Hulk.jpg");

    	return view('foto',compact("diziResim"));
    }
}
