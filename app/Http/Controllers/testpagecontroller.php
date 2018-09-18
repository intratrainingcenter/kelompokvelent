<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testpagecontroller extends Controller
{
    public function index()
	{
		return view('index');
	}
	public function sarkom(Request $request, $sarkom)
	{
		return $sarkom;
	}
}
