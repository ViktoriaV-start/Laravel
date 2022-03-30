<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(Request $request) {
        if ($request->isMethod('post')) {
            $request->flash();

            $mail = ($request->only(['mail']))['mail'];
            $regexp = '/^([!#$%&*-+{}|?\~\w]+(.?[\w]+)*@([\w-]{1,255}\.)[\w-]{2,4})?$/';

                if (preg_match($regexp, $mail) == 0) {
                    return view('about',
                        ['message' => 'Введите корректный адрес элетронной почты',
                         'mailWarn' => '',
                         'sucсess' => 'd-none']);
                } else {
                    return view('about',
                        ['message' => 'Введите правильный адрес элетронной почты',
                         'mailWarn' => 'd-none',
                         'sucсess' => '']);
                }
        }
        return view('about',
            ['message' => 'Введите правильный адрес элетронной почты',
             'mailWarn' => 'd-none',
             'sucсess' => 'd-none']);
    }
}
