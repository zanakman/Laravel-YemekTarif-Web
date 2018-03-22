<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class YemeklerController extends Controller
{
    public function index()
    {
    	$model = User::find(1);
    	return view('test', compact('model'));
    }
}
