<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    //
    function index(){
        // eloquent model
        $categories = Category::get();
        // dump and die
        // query bilder
        // DB
        return view('category.index',compact('categories'));
    }
    public function show($id){
        $category = Category::find($id);
        return $category;
    }
    public function destroy($id)
    {
        Category::find($id)->delete();
        return redirect()->route('category.index');
    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.update',compact('category'));
    }
    public function update($id,Request $request){
        Category::find($id)->update(
                [
                    'name' => $request->name
                ]
            );
        return redirect()->route('category.index');
    }
    public function create()
    {
        return view('category.create');
    }
    public function store(Request $request){
        Category::create([
            'name' => $request->name
        ]);
        return redirect()->route('category.index');
    }
}
