<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;  // здесь будет получать данные от пользователя

class IndexController extends Controller
{
    public function index() {
        return view('index', [
            'categories' => Category::all()
        ]);
    }
}
