<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tarif;
use Session;
use Redirect;

class TariflerController extends Controller
{
    public function tarifler()
    {
    	$tarifler = Tarif::get();
    	
    	return view('admin.tarifler.tarifler', compact('tarifler'));
    }

    public function tarifEkle()
    {
    	return view('admin.tarifler.tarifEkle');
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
            'resim' => '/upload/resimler/'.$filename,
            'tarif' => $input['tarif'],
            'yapilis' => $input['yapilis'],
            'malzemeler' => $input['malzemeler']
            
            ]);

        return Redirect::to('/admin/tarifler');

    }

    public function tarifDuzenle($id)
    {
        $tarif = Tarif::find($id);

        return view('admin.tarifler.tarifDuzenle', compact('tarif'));
    }

    public function tarifDuzenlePost(Request $request, $id)
    {   
        $tarif = Tarif::find($id);
        $input = $request->all();
        $tarif->yemek_adi = $input['yemek_adi'];
        $tarif->tarif = $input['tarif'];
        $tarif->yapilis = $input['yapilis'];
        $tarif->malzemeler = $input['malzemeler'];

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
        return Redirect::to('/admin/tarifler');
    }

    public function tarifSil($id)
    {
        $tarif = Tarif::find($id);
        $tarif->delete();
        return Redirect::to('/admin/tarifler');
    }
}
