<?php

namespace App\Http\Controllers;

use App\inv;
use Illuminate\Http\Request;

class InvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $res = new Inv;
		$res->name = $request->input('name');
		$res->email = $request->input('email');
		$res->pwd = $request->input('pwd');
		$res->phone = $request->input('phone');
		$res->save();
		$request->session()->flash('msg','Data Inserted');
		return redirect('inv_show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\inv  $inv
     * @return \Illuminate\Http\Response
     */
    public function show(inv $inv)
    {
        return view('inv_show')->with('todoArr',Inv::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inv  $inv
     * @return \Illuminate\Http\Response
     */
    public function edit(inv $inv,$id)
    {
         return view('edit')->with('todoArr',Inv::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inv  $inv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inv $inv)
    {
        $res = Inv::find($request->id);
		$res->name = $request->input('name');
		$res->email = $request->input('email');
		$res->pwd = $request->input('pwd');
		$res->phone = $request->input('phone');
		$res->save();
		$request->session()->flash('msg','Data Updated');
		return redirect('inv_show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inv  $inv
     * @return \Illuminate\Http\Response
     */
    public function destroy(inv $inv, $id)
    {
        Inv::destroy(array('id',$id));
		
		return redirect('inv_show');
    }
}
