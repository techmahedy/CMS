<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Category;

class CategoryController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {  
       $categories = Category::latest()->get();
       return view('admin.category.index',compact('categories'));
    }

   
    public function create()
    {
       return view('admin.category.create');
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [

        'category_name' => 'required|unique:categories',
         'slug' => 'required|unique:categories'

        ]);
        $categories = new Category;
        $categories->category_name = $request->category_name;
        $categories->slug = $request->slug;
        $categories->status = $request->status;
        $categories->save();
        
        session()->flash('message','category added successfully');
        return redirect()->back();
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categories = Category::find($id);
        return view('admin.category.update',compact('categories'));
    }

  
    public function update(Request $request, $id)
    {
        $this->validate($request, [

        'category_name' => 'required'
        ]);
        $categories = category::find($id);
        $categories->category_name = $request->category_name;
        $categories->status = $request->status;
        $categories->save();
        session()->flash('message','Category updated successfully');
        return redirect()->back();
    }

   
    public function destroy($id)
    {
       $category = Category::find($id);
       $category->delete();
       return redirect()->back();
    }
}
