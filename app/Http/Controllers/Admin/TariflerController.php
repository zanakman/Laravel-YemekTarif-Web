<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tarif, App\Category;
use Session;
use Redirect, Auth;

class TariflerController extends Controller
{   
    public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function tarifler()
    {
    	$tarifler = Tarif::get();
    	//$categories = Category::get();
    	return view('admin.tarifler.tarifler', compact('tarifler'));
    }

    public function tarifEkle()
    {
        $categories = Category::get();
    	return view('admin.tarifler.tarifEkle', compact('categories'));
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
            'category_id' => $input['category_id']
            ]);

        return Redirect::to('/admin/tarifler');

    }

    public function tarifDuzenle($id)
    {
        $tarif = Tarif::find($id);
        $categories = Category::get();
        return view('admin.tarifler.tarifDuzenle', compact('tarif','categories'));
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
        $tarif->category_id = $input['category_id'];
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
