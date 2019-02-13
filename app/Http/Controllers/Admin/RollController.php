<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Roll;
use Session;

class RollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rolls= Roll::all();
        return view('admin.rolls.index',compact('rolls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rolls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $roll=new Roll();
        $roll->name=$request->name;
        $roll->save();
        Session::flash('msg',"Roll has been created Successfully");
        return redirect()->route('rolls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roll = Roll::where('id',$id)->first();
        return view('admin.rolls.edit',compact('roll'));
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
        
        $request->validate([
            'name'=>'required'
        ]);
        $roll=Roll::find($id);
        $roll->name=$request->name;
        $roll->save();
        Session::flash('msg',"Roll has been updated Successfully");
        return redirect()->route('rolls.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $roll= Roll::where('id',$id)->first();
        $roll->delete();
        Session::flash('msg',"Roll has been deleted Successfully");
        return redirect()->route('rolls.index');
    }
}
