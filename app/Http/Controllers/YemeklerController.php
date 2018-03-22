<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class YemeklerController extends Controller
{
    public function index()
    {
    	$models = User::get();
    	return view('test', compact('models'));
    }
}
