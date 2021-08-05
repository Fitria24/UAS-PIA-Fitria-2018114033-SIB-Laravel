<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $kontaks =  Kontak::all();
        return response()->json([
            'success'=> true,
            'message'=> 'Daftar data kontak',
            'data'=> $kontaks
        ],200);
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
            'nama' => 'required',
            'no_tlp' => 'required|number',
            'email' => 'required'
        ]);

        $kontaks = Kontak::create([
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'email' => $request->email
           
        ]);
        if($kontaks)
        {
            return response()->json([
                'success' => true,
                'message' => 'Kontak berhasil di tambahkan',
                'data' => $kontaks
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Kontak gagal di tambahkan',
                'data' => $kontaks
            ],409);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kontak= Kontak::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Kontak',
            'data'    => $kontak
        ], 200);

    }
    public function edit($id)
    {
      
        $kontak = Kontak::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Kontak',
            'data'    => $kontak
        ], 200);
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
        $kontak = Kontak::find($id)
        ->update([
            'nama' => $request->nama,
            'no_tlp' => $request->no_tlp,
            'alamat' => $request->alamat
          
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data kontak berhasil di rubah',
            'data'    => $kontak
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kotak = kontak::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data kontak berhasil di hapus',
            'data'    => $kontak
        ], 200);
    }
}
