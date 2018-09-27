<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\siswa;
use App\kelas;
class siswacontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = siswa::all();
        $data = DB::table('siswas')
                ->join('kelas','kelas.id','=','siswas.kelas')
                ->select('siswas.id','siswas.nisn','siswas.nama','siswas.tanggal_lahir','siswas.jenis_kelamin','siswas.kelas','kelas.nama_kelas')
                ->orderBy('id')
                ->get();
                //dd($data);
        $kelas = kelas::all();
        // dd($kelas);
        return view('page.siswa', compact('data', 'kelas'));
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
        $last = siswa::latest('id')->first();
        if ($last == null) {
            $number = intval(0 + 1);
        } else {
            $number = intval($last->id + 1);
        }
        $todaydate = date('Ym');
        $nisn = $todaydate.sprintf('%05d',$number);
        $data = new siswa([
            'nisn' => $nisn,
            'nama' => $request->get('nama_murid'),
            'kelas' => $request->get('kelas'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'jenis_kelamin' => $request->get('jenis_kelamin')
        ]);
        
        $data->save();
        return redirect()->route('siswa.index')->with('success', 'Data Telah Ditambahkan');
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
        $data = siswa::find($id);
        return view('page.siswa.editsiswa',compact('data','id'));
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
        
        $student = siswa::find($id);
        $student->tanggal_lahir = $request->get('tanggal_lahir');
        $student->jenis_kelamin = $request->get('jenis_kelamin');
        $student->nama = $request->get('nama_murid');
        $student->kelas = $request->get('kelas');
        $student->save();
        return redirect()->route('siswa.index')->with('success','Edit Siswa Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = siswa::find($id);
        //dd($data);  
        $data->delete();
        return redirect()->route('siswa.index')
                ->with('success', 'Data Deleted Successfully');
    }
}
