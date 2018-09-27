<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\piket;

class piketcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = piket::all();
        return view('page.piket',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $this->validate($request,[
            'nisn' => 'required',
            'jadwalhari' => 'required'
        ]);
        $data = new piket([
            'nisn' => $request->get('nisn'),
            'jadwalhari' => $request->get('jadwalhari')
        ]);
        $data->save();
        return redirect()->route('piket.index')->with('success','data tersimpan');
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
        $data = piket::find($id);
        return view('page.piket.editpiket',compact('data','id'));
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
        $data = piket::find($id);
        $data->jadwalhari = $request->get('jadwalhari');
        $data->save();
        return redirect()->route('piket.index')->with('success','Edit Jadwal Piket Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = piket::find($id);
        $data->delete();
        return redirect()->route('piket.index')->with('success','data tersimpan');
    }
}
