<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.category.create');
    }


    public function edit()
    {
        return view('admin.category.edit');
    }
}

//$news = DB::table('news')->get(); //getAll
//return view('news.index')->with('news', $news);
