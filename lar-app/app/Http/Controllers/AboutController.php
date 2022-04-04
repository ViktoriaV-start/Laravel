<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request) {
        if ($request->isMethod('post')) {
            $request->flash();

            $mail = ($request->only(['mail']))['mail'];
            $regexp = '/^([!#$%&*-+{}|?\~\w]+(.?[\w]+)*@([\w-]{1,255}\.)[\w-]{2,4})?$/';

                if (preg_match($regexp, $mail) == 0) {
                    return view('about', [
                        'categories' => Category::all(),
                        'message' => 'Введите корректный адрес элетронной почты',
                        'mailWarn' => '',
                        'done' => 'd-none']);
                } else {
                    return view('about', [
                        'categories' => Category::all(),
                        'success' => 'Сообщение',
                        'message' => '',
                        'mailWarn' => '',
                        'done' => '']);
                }
        }
        return view('about', [
            'categories' => Category::all(),
            'message' => '',
            'mailWarn' => 'd-none',
            'done' => 'd-none']);
    }
}


