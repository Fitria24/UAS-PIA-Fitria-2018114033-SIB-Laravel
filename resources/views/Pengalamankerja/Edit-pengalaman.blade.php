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
                <strong>EDIT DATA PENGALAMAN KERJA PEGAWAI</strong> 
</br>
</br>
    <form action="{{ url('update-pengalaman',$dt->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field () }}  
        <div class="form-group">
       Nama 
         <input type="text" id="nama" name="nama"class="form-control">
        </div> 
        <div class="form-group">
      Pengalaman Kerja
         <input type="text" id="pengalaman_kerja" name="pengalaman_kerja"class="form-control">
        </div> 
        <div class="form-group">
            <button type="submit" class="btn btn-success">Ubah Data</button>
            <a href="/data-pengalaman" class="btn btn-primary">Kembali</a>
            </div>
            </form>
            </div>
            </div>
            </div>
</body>
</html>
