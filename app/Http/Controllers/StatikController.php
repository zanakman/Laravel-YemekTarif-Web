<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarif;

class StatikController extends Controller
{
	
	public function index()
	{
        $ilktarif = Tarif::first();
        $tarifler = Tarif::skip(1)->take(6)->get();
		return view('index', compact('tarifler', 'ilktarif'));
	}

    public function tarif($id)
    {
        $ilktarif = Tarif::find($id);

        return view('tarif', compact('ilktarif'));
    }

    public function hakkimda()
    {
    	return view('statik.hakkimda');
    }

    public function iletisim()
    {
    	return view('statik.iletisim');
    }

}
