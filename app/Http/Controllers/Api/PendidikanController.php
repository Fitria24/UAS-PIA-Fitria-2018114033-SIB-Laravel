<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
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
        $pendidikans =  Pendidikan::all();
        return response()->json([
            'success'=> true,
            'message'=> 'Daftar data pendidikan',
            'data'=> $pendidikans
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
            'sd' => 'required',
            'smp' => 'required',
            'sma' => 'required',
            'perguruan_tinggi' => 'required'
           
        ]);

        $pendidikans = Pendidikan::create([
            'nama' => $request->nama,
            'sd' => $request->sd,
            'smp' => $request->smp,
            'sma' => $request->sma,
            'perguruan_tinggi' => $request->perguruan_tinggi
            
           
        ]);
        if($pendidikans)
        {
            return response()->json([
                'success' => true,
                'message' => 'Pendidikan berhasil di tambahkan',
                'data' => $pendidikans
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Pendidikan gagal di tambahkan',
                'data' => $pendidikans
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
        $pendidikan = Penddikan::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Pendidikan',
            'data'    => $pendidikan
        ], 200);

    }
    public function edit($id)
    {
      
        $pendidikan = Pendidikan::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Pendidikan',
            'data'    => $pendidikan
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
        $pendidikan = Pendidikan::find($id)
        ->update([
            'nama' => $request->nama,
            'sd' => $request->sd,
            'smp' => $request->smp,
            'sma' => $request->sma,
            'perguruan_tinggi' => $request->perguruan_tinggi,
            
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data pendidikan berhasil di rubah',
            'data'    => $pendidikan
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
        $pendidikan = Pendidikan::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data pendidikan berhasil di hapus',
            'data'    => $pendidikan
        ], 200);
    }
}
