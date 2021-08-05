<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kontak;
class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataKontak = Kontak::latest()->get();
        return view('Kontak.Data-kontak',compact('dataKontak'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Kontak.Create-kontak');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtUpload = new Kontak;
        $dtUpload->nama = $request->nama;
        $dtUpload->no_tlp = $request->no_tlp;
        $dtUpload->email = $request->email;
       
        $dtUpload->save();
 
        return redirect('data-kontak');
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
        $dt = Kontak::findorfail($id);
        return view('Kontak.Edit-kontak',compact('dt'));
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
        $ubah = Kontak::findorfail($id);
      

        $dt = [
                'nama' => $request['nama'],
                'no_tlp' => $request['no_tlp'],
                'email' => $request['email'],
        ];
       
        $ubah->update($dt);
        return redirect('data-kontak');
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
         $hapus = Kontak::findorfail($id);
    
         $hapus->delete();
         return back();
    }
}
