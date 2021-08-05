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
                <strong>TAMBAH DATA PENDIDIKAN PEGAWAI</strong> 
</br>
</br>
    <form action="{{ route('simpan-pendidikan') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field () }}
   
       <div class="form-group">
       Nama 
         <input type="text" id="nama" name="nama"class="form-control">
        </div> 
        <div class="form-group">
       SD
         <input type="text" id="sd" name="sd"class="form-control">
        </div>
        <div class="form-group">
       SMP
         <input type="text" id="smp" name="smp"class="form-control">
        </div>
        <div class="form-group">
       SMA 
         <input type="text" id="sma" name="sma"class="form-control">
        </div>
        <div class="form-group">
       Perguruan Tinggi
         <input type="text" id="perguruan_tinggi" name="perguruan_tinggi"class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Simpan Data</button>
             <a href="/data-pendidikan" class="btn btn-primary">Kembali</a>
            </form>
            </div>
            </div>
            </div>

        
  </body>
</html>