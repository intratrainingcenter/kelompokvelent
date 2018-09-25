<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\kelas;
use App\siswa;
use App\absensi;

class absensicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = kelas::all();

        return view('page.absensi',['data' => $data]);
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
     
        // mengambil value dari radio button 
        for ($i=0; $i < $request->jumlah_data; $i++) { 
            $request_name='optionsRadios'.$i;
            $data[] = $request->$request_name;
        }

        // mengambil value keterangan
        foreach ($data as $key => $value) {
            $data_information[] = $data[$key][1];
        }

        $data_student = array();
        // cek apakah value keterangan tidak kosong
        foreach ($data_information as $key => $value) {
            if (!is_null($value[$key])) {
                $data_student[] = siswa::find($data[$key][0]);
            }
        }

        // remove null value dari data keterangan absen
        foreach (array_keys($data_information, null) as $key) {
            unset($data_information[$key]);
        }

        //get data nisn
        foreach ($data_student as $key => $value) {
            $nisn[]=$value->nisn;
        }

        // set key kembali dari 0
        $data_result = array_values($data_information);
        
        foreach ($nisn as $key => $value) {
            $data_save[] = [
                'nisn' => $value,
                'status' => $data_result[$key],
            ];
        }

        absensi::insert($data_save);

        return redirect()->route('absensi.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('siswas')->where('kelas',$id)->get();
        $data_count = count($data); 
        return view('page.absensi_siswa',['data' => $data,'data_count' => $data_count]);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
