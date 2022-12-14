<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();

        // dd($categories);
        return view('backend.categories.index', ['categories' => $categories]);
    }

    public function create(){
    
        return view('backend.categories.create');
    }
    public function store(Request $request){
        Category::create([
            'title'=>$request->title,
            'description'=>$request->description
        ]);
    
        return redirect()->route('categories.store')->withMessage("Category Added successfully");
    }

    public function show(Category $category){
        // $category = Category::findOrFail($id);
        // dd($category);
        return view('backend.categories.show', ['category' => $category]);
    }
   
}
