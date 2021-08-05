<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;
class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPendidikan = Pendidikan::latest()->get();
        return view('Pendidikan.Data-pendidikan',compact('dataPendidikan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pendidikan.Create-pendidikan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dtUpload = new Pendidikan;
        $dtUpload->nama = $request->nama;
        $dtUpload->sd = $request->sd;
        $dtUpload->smp = $request->smp;
        $dtUpload->sma = $request->sma;
        $dtUpload->perguruan_tinggi = $request->perguruan_tinggi;
       
        $dtUpload->save();
 
        return redirect('data-pendidikan');
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
        $dt = Pendidikan::findorfail($id);
        return view('Pendidikan.Edit-pendidikan',compact('dt'));
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
        $ubah = Pendidikan::findorfail($id);
      

        $dt = [
                'nama' => $request['nama'],
                'sd' => $request['sd'],
                'smp' => $request['smp'],
                'sma' => $request['sma'],
        ];
       
        $ubah->update($dt);
        return redirect('data-pendidikan');
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
        $hapus = Pendidikan::findorfail($id);
    
        $hapus->delete();
        return back();
    }
}
