<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    $products= Product::all();
        return view('public.home',compact('products'));
        }
    public function show($id){
        $product=Product::where('id',$id)->first();
        return view('public.details',compact('product'));
    }    
    public function about(){
        return view('public.about');
    }
}
