<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function showRegistrationForm() {
        return view('auth.register', [
            'categories' => Category::all()
        ]);
    }

    public function store(UserRequest $request, User $user) {
        $errors = [];
        $request->validated();
        

        if ($request->post('password') !== $request->post('password_confirmation')) {
         
            $errors['password'][] = 'Введенные пароли не совпадают';
            return redirect()->route('register')->withErrors($errors);
        } 
    
        $saveStatus = $user->fill([
            'name' => $request->post('name'),
            'surname' => $request->post('surname'),
            'password' => Hash::make($request->post('password')),
            'email' => $request->post('email')
        ])->save();

    
        if ($saveStatus) {
            return redirect()->route('login')->with('success', 'Успешная регистрация');
        }
        return back()->with('error', 'Ошибка при сохранении');
    }
}



