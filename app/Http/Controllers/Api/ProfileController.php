<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles =  Profile::all();
        return response()->json([
            'success'=> true,
            'message'=> 'Daftar data profile',
            'data'=> $profiles
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
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'photo' => 'required'
        ]);

        $profiles = Profile::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'photo' => $request->photo
           
        ]);
        if($profiles)
        {
            return response()->json([
                'success' => true,
                'message' => 'Profile berhasil di tambahkan',
                'data' => $profiles
            ],200);
        }else{
            return response()->json([
                'success' => false,
                'message' => 'Profile gagal di tambahkan',
                'data' => $profiles
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
        $profile = Profile::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Profile',
            'data'    => $profile
        ], 200);

    }
    public function edit($id)
    {
      
        $profile = Profile::where('id',$id)->first();
        
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Profile',
            'data'    => $profile
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
        $profile = Profile::find($id)
        ->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jabatan' => $request->jabatan,
            'photo' => $request->photo
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data profile berhasil di rubah',
            'data'    => $profile
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
        $profile = Profile::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data profile berhasil di hapus',
            'data'    => $profile
        ], 200);
    }
}
