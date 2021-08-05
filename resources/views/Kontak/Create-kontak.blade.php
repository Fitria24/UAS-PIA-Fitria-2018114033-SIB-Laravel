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
                <strong>TAMBAH DATA KONTAK PEGAWAI</strong> 
</br>
</br>
    <form action="{{ route('simpan-kontak') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field () }}
   
       <div class="form-group">
       Nama 
         <input type="text" id="nama" name="nama"class="form-control">
        </div> 
        <div class="form-group">
       Nomor Telepon 
         <input type="number" id="no_tlp" name="no_tlp"class="form-control">   
          </div> 
          <div class="form-group">
       Email
         <input type="text" id="email" name="email"class="form-control">   
          </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
             <a href="/data-kontak" class="btn btn-primary">Kembali</a>
            </form>
            </div>
            </div>
            </div>

        
  </body>
</html>