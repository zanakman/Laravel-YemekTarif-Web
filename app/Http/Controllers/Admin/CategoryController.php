<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use Redirect;

class CategoryController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin');
    }
    
    public function categories()
    {
    	$categories = Category::get();
    	return view('admin.categories.categories', compact('categories'));
    }

    public function create()
    {
    	return view('admin.categories.categoryCreate');
    }

    public function store(Request $request)
    {
    	$input = $request->all();

    	$category = new Category();

    	$category->name = $input['name'];
    	$category->slug = $input['slug'];

    	$category->save();
    	return Redirect::to('/admin/categories');
    }

    public function edit($id)
    {
    	$category = Category::find($id);
    	return view('admin.categories.categoryUpdate',compact('category'));
    }

    public function update(Request $request, $id)
    {
    	$input = $request->all();
		$category = Category::find($id);

    	$category->name = $input['name'];
    	$category->slug = $input['slug'];

    	$category->save();

    	return Redirect::to('/admin/categories');    	
    }

    public function delete($id)
    {
    	$category = Category::find($id);
    	$category->delete();
    	return Redirect::to('/admin/categories');
    }
}
