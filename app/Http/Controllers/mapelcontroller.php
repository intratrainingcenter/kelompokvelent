<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mapel;
class mapelcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = mapel::all();
        return view('page.mapel', compact('data'));
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
        $last = mapel::latest('id')->first();
        if ($last == null) {
            $number = intval(0 + 1);
        } else {
            $number = intval($last->id + 1);
        }
        $todaydate = date('Ym');
        $mapel = $todaydate.sprintf('%05d',$number);
        $data = new mapel([
            'id_mapel' => $mapel,
            'mapel' => $request->get('mapel'),
            'pengajar' => $request->get('pengajar'),
            ]);
            //dd($data);
        $data->save();
        return redirect()->route('mapel.index')->with('success', 'Data Telah Ditambahkan');
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
        //
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
        $student = mapel::find($id);
        $student->mapel = $request->get('mapel');
        $student->pengajar = $request->get('pengajar');
        $student->save();
        return redirect()->route('mapel.index')->with('success','Edit Siswa Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = mapel::find($id);
        //dd($data);  
        $data->delete();
        return redirect()->route('mapel.index')
                ->with('success', 'Data Deleted Successfully');
    }
}
