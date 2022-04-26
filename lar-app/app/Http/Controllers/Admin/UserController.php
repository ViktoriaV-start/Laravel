<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {
        return view('admin.allUsers', [
            'users' => User::all(),
            'categories' => Category::all(),
        ]);
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect()->route('admin.user.index');
    }

    public function update(Request $request, User $user) {

        !$user->is_admin === true ? $user->is_admin=true : $user->is_admin=false;

        $saveStatus = $user->save();

        if ($saveStatus) {
            return redirect()->route('admin.user.index');
        }
        return back()->with('error', 'Ошибка при сохранении');
    }
    
}
