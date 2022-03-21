<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  // здесь будет получать данные от пользователя

class HomeController extends Controller
{
    public function index() {
        return view('index');
    }
}
