<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Program Profile Pegawai</title>
    </head>
    <body>
        </div>
        <div class="card mt-5">
                <div class="card-header text-center">
                <strong>DATA PENGALAMAN PEGAWAI </strong> 
                <div class="card-body">
    </div>
    <div class=" text-right">
    <a href="{{ route('create-pengalaman')}}" class="btn btn-success"> Tambah Data Pengalaman Kerja Pegawai</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <div class="container">
        </div>
            <tr>
                <th>No</th>
                <th>Nama Pegawai </th>
                <th>Pengalaman Kerja</th>
               
                <th>Aksi</th>
                
            </tr>
            @foreach ($dataPengalaman as $item)
           
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->pengalaman_kerja}}</td>
            
                <td>
                   

                    <a href="{{url('edit-pengalaman',$item->id) }}" class="btn btn-warning">Edit</a>
                                   
                    <a href="{{url('delete-pengalaman',$item->id) }}" class="btn btn-danger">Hapus</a>
                   
             </td>
             
              </tr>
            
            @endforeach
          
            </table>
            <a href="/home" class="btn btn-primary">Kembali</a>
</div>
       
  </body>
</html>