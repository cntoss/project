<?php

namespace App\Http\Controllers\Admin;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class CategoryController extends Controller
{
   public function index()
    {
        $categories= Category::all();
        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    
    public function store(Request $request)
    {
        request()->validate([
            'name'=>'required|max:200',
        ]);
        $category=new Category();
        $category->name=$name=$request->name;
        $category->status=$request->status;
        $category->save();
        Session::flash('msg',"Category was created successfully");
        return redirect()->route('category.index');
    }

    public function edit($id)
    {
        $category=Category::where('id',$id)->first();
        return view('admin.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        
        request()->validate([
            'name'=>'required|max:200',
            'description'=>'required',
        ]);
        $category=Category::find($id);
        $category->name=$name=$request->name;
        $category->status=$request->status;
        $category->save();
        Session::flash('msg',"Category was updated successfully");
        return redirect()->route('category.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::where('id',$id)->first();
        $category->delete();
        Session::flash('msg',"category deleted successfully");
        return redirect()->route('admin.category.index');
        
    }
}
