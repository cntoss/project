<?php

namespace App\Http\Controllers\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use File;
use App\Model\Buyer;
use Auth;

class BuyerController extends Controller
{
    public function index()
    {
        $buyers=Buyer::all();
        return view('admin.buyer.index' ,compact('buyers'));
    }

    public function create()
    {
        return view('admin.buyer.create');
    }

    public function store(Request $request)
    {
         request()->validate([
            'name'=>'required|max:60',
            'address'=>'required',
            'details'=>'required',
            'image'=>'image|mimes:jpg,png,jpeg,gif|max:2048',
            'phone_no'=>'required|max:10'
        ]);

        $buyer=new buyer();
        $buyer->name=$request->name;
        $buyer->details=$request->details;
        $buyer->address=$request->address;
        $buyer->phone_no=$request->phone_no;
        if($request->hasFile('image')){
            $image=$request->file('image');
            $new_name=rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/images'),$new_name);
            $buyer->image=$new_name;
        }
        $buyer->save();
        Session::flash('msg',"buyer was created successfully");
        return redirect()->route('buyer.index');
   
    }

    public function show($id)
    {  
        $buyer=Buyer::where('id',$id)->first();
        return view('admin.buyers.show',compact('buyer'));
    }

    public function edit($id)
    {
        $buyer=buyer::where('id',$id)->first();
        return view('admin.buyer.edit',compact('buyer'));
    
    }

    public function update(Request $request, $id)
    {
       request()->validate([
            'name'=>'required|max:60',
            'address'=>'required',
            'details'=>'required',
            'image'=>'image|mimes:jpg,png,jpeg,gif|max:2048',
            'phone_no'=>'nullable|numeric'
        ]);
        $buyer=Buyer::findOrFail($id);
        $buyer->name=$request->name;
        $buyer->details=$request->details;
        $buyer->address=$request->address;
        $buyer->phone_no=$request->phone_no;
            $image=$request->file('image');
            $new_name=rand().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/images'),$new_name);
            $buyer->image=$new_name;
                   
        $buyer->save();
        Session::flash('msg',"buyer's data was created successfully");
        return redirect()->route('buyer.index');

    }

    public function destroy($id)
    {
    $buyer=Buyer::where('id',$id)->first();
    if(File::exists('image/'.$buyer->image)){
        unlink('images/'.$buyer->image);
          }
    $buyer->delete();    
    Session::flash('msg',"buyer's data was Deleted successfully");
    return redirect()->route('buyer.index');
    }
}