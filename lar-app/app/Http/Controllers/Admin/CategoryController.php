<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.allCategories', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('admin.category.create',[
            'categories' => Category::all()
        ]);
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit',
        [
            'categories' => Category::all(),
            'category' => $category
        ]);
    }
    public function store(Request $request, Category $category) {
        $request->flash(); // метод фиксирует все данные от пользователя (сохраняются в одноразовую сессию),
        $category->fill($request->all())->save();

        return redirect()->route('admin.category.index')->with('success', 'Категория успешно добавлена');
    }

    public function update(Request $request, Category $category) {
        $request->flash();
        $category->fill($request->all())->save();
        return redirect()->route('admin.category.index')->with('success', 'Категория изменена');
    }

    public function destroy(Category $category) {
        $category->delete();
        return redirect()->route('admin.category.index');
    }
}
