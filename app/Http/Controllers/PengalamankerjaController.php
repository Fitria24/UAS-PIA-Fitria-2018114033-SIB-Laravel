<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengalamankerja;
class PengalamankerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPengalaman = Pengalamankerja::latest()->get();
        return view('Pengalamankerja.Data-pengalaman',compact('dataPengalaman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pengalamankerja.Create-pengalaman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtUpload = new Pengalamankerja;
        $dtUpload->nama = $request->nama;
        $dtUpload->pengalaman_kerja = $request->pengalaman_kerja;
       
        $dtUpload->save();
 
        return redirect('data-pengalaman');
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
        $dt = Pengalamankerja::findorfail($id);
        return view('Pengalamankerja.Edit-pengalaman',compact('dt'));
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
        $ubah = Pengalamankerja::findorfail($id);
      

        $dt = [
                'nama' => $request['nama'],
                'pengalaman' => $request['pengalaman'],
        ];
       
        $ubah->update($dt);
        return redirect('data-pengalaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //dd($id);
        $hapus = Pengalamankerja::findorfail($id);
    
        $hapus->delete();
        return back();
    }
}
