<?php

namespace App\Http\Controllers;

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
        $dataProfile = Profile::latest()->get();
       return view('Profile.Data-profile',compact('dataProfile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Profile.Create-profile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nm = $request->photo;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();
 
        $dtUpload = new Profile;

        $dtUpload->nama = $request->nama;
        $dtUpload->alamat = $request->alamat;
        $dtUpload->jenis_kelamin = $request->jenis_kelamin;
        $dtUpload->jabatan = $request->jabatan;
        $dtUpload->photo = $namaFile;
 
        $nm->move(public_path().'/fileprofile',$namaFile);
        $dtUpload->save();
 
        return redirect('data-profile');
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
        $dt = Profile::findorfail($id);
        return view('Profile.Edit-profile',compact('dt'));
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
        $ubah = Profile::findorfail($id);
        $awal = $ubah->photo;

        $dt = [
                'nama' => $request['nama'],
                'alamat' => $request['alamat'],
                'jenis_kelamin' => $request['jenis_kelamin'],
                'jabatan' => $request['jabatan'],
                'photo' => $awal,
                
        ];
        $request->photo->move(public_path().'/fileprofile', $awal);
        $ubah->update($dt);
        return redirect('data-profile');
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
         $hapus = Profile::findorfail($id);

         $file = public_path('/fileprofile/').$hapus->photo;
     
         if (file_exists($file)){
         
             @unlink($file);
         }
     
         $hapus->delete();
         return back();
    }
}
