<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
       $categories = Category::all();
    //    dd($categories);

        return view('backend.categories.index', ['categories' => $categories]);
    }

    public function create(){

        return view('backend.categories.create');
        

    }
    public function store(Request $request){
        // dd(request()->all());
        Category::create([
            'title' => request()->title,
            'description' => request()->description,
        ]);
        return redirect()->route('categories.index')->withMessage('Product is added succesfully');
    }
}
