<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Program Profile Pegawai</title>
    </head>
    <body>
    <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                <strong>TAMBAH DATA PROFILE PEGAWAI</strong> 
</br>
</br>
    <form action="{{ route('simpan-profile') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field () }}
   
       <div class="form-group">
       Nama 
         <input type="text" id="nama" name="nama"class="form-control">
        </div> 
        <!-- <div class="form-group">
       Nomor Telepon
         <input type="number" id="no_tlp" name="no_tlp"class="form-control">
        </div> -->
        <div class="form-group">
      Alamat
         <input type="text" id="alamat" name="alamat"class="form-control">
        </div>  
        <div class="form-group">
     <center>Jenis Kelamin</center>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                <option value="Perempuan">Perempuan</option>
                <option value="Laki-Laki">Laki-Laki</option> 
                </select>    
          </div> 
          <div class="form-group">
      Jabatan
         <input type="text" id="jabatan" name="jabatan"class="form-control">
        </div>  
          <div class="form-group">
            <input type="file" id="photo" name="photo"class="form-control">
        </div>
        <div class="form-group">
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
             <a href="/data-profile" class="btn btn-primary">Kembali</a>
            </form>
            </div>
            </div>
            </div>

        
  </body>
</html>