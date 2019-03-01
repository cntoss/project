<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Product;
use App\Model\Category;
use App\Model\Brand;
use Session;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories= Category::where('status',1)->get();
        $brands= Brand::where('status',1)->get();
        return view('admin.product.create',compact('categories','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
         request()->validate([
            'name'=>'required|max:60',
            'description'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'featured_image'=>'image|mimes:jpg,png,jpeg,gif|max:2048',
            'coupon'=>'required',
            'promotion'=>'required',
            'status'=>'required'
        ]);

        $product=new Product();
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount=$request->discount;
        $product->coupon=$request->coupon;
        $product->promotion=$request->promotion;     
        $product->status=$request->status;
        if($request->hasFile('image')){
            $image=$request->file('image');
            $new_name=rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/images'),$new_name);
            $product->featured_image=$new_name;
        }
        $product->save();
        Session::flash('msg',"product was created successfully");
        return redirect()->route('product.index');
   
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::where('id',$id)->first();
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         request()->validate([
            'name'=>'required|max:60',
            'description'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'featured_image'=>'image|mimes:jpg,png,jpeg,gif|max:2048',
            'coupon'=>'required',
            'promotion'=>'required',
            'status'=>'required'
        ]);

        $product=Product::findOrFail($id);
        $product->name=$request->name;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->discount=$request->discount;
        $product->coupon=$request->coupon;
        $product->promotion=$request->promotion;     
        $product->status=$request->status;
        if($request->hasFile('image')){

        if(File::exists('images/'.$product->featured_image)){
            unlink('images/'.$product->featured_image);
        }
            $image=$request->file('image');
            $new_name=rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/images'),$new_name);
            $product->featured_image=$new_name;
        }
        $product->save();
        Session::flash('msg',"product was created successfully");
        return redirect()->route('product.index');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::where('id',$id)->first();
        if(File::exists('images/'.$product->featured_image)){
            unlink('images/'.$product->featured_image);
        }
        $product->delete();
        Session::flash('msg',"product deleted successfully");
        return redirect()->route('product.index');
    }
}
