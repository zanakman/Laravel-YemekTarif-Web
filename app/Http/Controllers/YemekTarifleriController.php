<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, App\Tarif,Redirect;

class YemekTarifleriController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
    }

    public function tarifler()
    {
    	$tarifler = Tarif::where('user_id',Auth::user()->id)->get();
    	
    	return view('tarifler.tarifler', compact('tarifler'));
    }

    public function tarifEkle()
    {

    	return view('tarifler.tarifEkle');
    }

    public function tarifEklePost(Request $request)
    {
    	$input = $request->all();
        $file = $request->file('resim');
        $filename = $file->getClientOriginalName();
        $ext = $file->getClientOriginalExtension();
        $fileRealPath = $file->getRealPath();

        $destPath = public_path().'/upload/resimler/';
        $file->move($destPath,$file->getClientOriginalName());
        $tarif = Tarif::create([
            'yemek_adi' => $input['yemek_adi'],
            'user_id' => Auth::user()->id,
            'resim' => '/upload/resimler/'.$filename,
            'tarif' => $input['tarif'],
            'yapilis' => $input['yapilis'],
            'malzemeler' => $input['malzemeler'],
            
            ]);

        return Redirect::to('/');

    }

    public function tarifDuzenle($id)
    {
        $tarif = Tarif::find($id);

        return view('tarifDuzenle', compact('tarif'));
    }

    public function tarifDuzenlePost(Request $request, $id)
    {   
        $tarif = Tarif::find($id);
        $input = $request->all();
        $tarif->yemek_adi = $input['yemek_adi'];
        $tarif->tarif = $input['tarif'];
        $tarif->yapilis = $input['yapilis'];
        $tarif->malzemeler = $input['malzemeler'];
        $tarif->user_id = Auth::user()->id;

        if(file_exists($request->file('resim'))){
            $file = $request->file('resim');
            $filename = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $fileRealPath = $file->getRealPath();

            $destPath = public_path().'/upload/resimler/';
            $file->move($destPath,$file->getClientOriginalName());
            $tarif->resim = '/upload/resimler/'.$filename;
        }

        $tarif->save();
        return Redirect::to('/');
    }

    public function tarifSil($id)
    {
        $tarif = Tarif::find($id);
        $tarif->delete();
        return Redirect::to('/');
    }
}
