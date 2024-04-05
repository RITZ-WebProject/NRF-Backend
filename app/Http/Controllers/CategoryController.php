<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'name_mm' => ['nullable', 'string', 'max:255'],
        ]);

        if($validator){
            $category = new Category;
            $category->name = $request->name;
            $category->name_mm = $request->name_mm;
            $category->save();

            return redirect('categories/')->with("info",'New Category is added');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'name_mm' => ['nullable', 'string', 'max:255'],
        ]);

        if($validator){
            $category = Category::find($id);
            $category->name = $request->name;
            $category->name_mm = $request->name_mm;
            $category->save();

            return redirect('categories/')->with("info", 'Existing category is updated');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('categories/')->with("info", 'Existing category is deleted');
    }

    public function test()
    {
        return view('categories.modal');
    }
}
