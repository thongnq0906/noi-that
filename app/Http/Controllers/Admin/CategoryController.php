<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    public function show()
    {
    	$cate = Category::all();
    	return view('admin.categories.show', compact('cate'));
    }

    public function create()
    {
    	return view('admin.categories.create');
    }

    public function postCreate(CategoryRequest $req)
    {
    	$input = [
    		'name' => $req->name,
    		'slug' => str_slug($req->name)
    	];
    	$result = Category::Create($input);
    	if ($result) {
    		return redirect()->route('admin.category.show')->with('success', 'Tạo thành công');
    	}
    	return redirect()->back();
    }

    public function update($id)
    {
    	dd($id);
    	return view('admin.categories.edit');
    }
}
