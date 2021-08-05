<?php

namespace App\Http\Controllers\Api;
use App\Models\Pengalamankerja;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengalamankerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengalamankerjas =  Pengalamankerja::all();
        return response()->json([
            'success'=> true,
            'message'=> 'Daftar data pengalaman kerja',
            'data'=> $pengalamankerjas
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
            'pengalaman_kerja' => 'required'
           
        ]);

        $pengalamankerjas = Pengalamankerja::create([
            'nama' => $request->nama,
            'pengalaman_kerja' => $request->pengalaman_kerja
            
           
        ]);
        if($pengalamankerjas)
        {
            return response()->json([
                'success' => true,
                'message' => 'Pengalaman kerja berhasil di tambahkan',
                'data' => $pengalamankerjas
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Pengalaman kerja gagal di tambahkan',
                'data' => $pengalamankerjas
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
        $pengalamankerjas = Pengalamankerja::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Pengalaman kerja',
            'data'    => $pengalamankerja
        ], 200);

    }
    public function edit($id)
    {
      
        $pengalamankerja = Pengalamankerja::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Pengalaman kerja',
            'data'    => $pengalamankerja
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
        $pengalamankerja = Pengalamankerja::find($id)
        ->update([
            'nama' => $request->nama,
            'pengalaman_kerja' => $request->pengalaman_kerja
            
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data pengalaman kerja berhasil di rubah',
            'data'    => $pengalamankerja
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
        $pengalamankerja = Pengalamankerja::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data pengalaman kerja berhasil di hapus',
            'data'    => $pengalamankerja
        ], 200);
    }
}
