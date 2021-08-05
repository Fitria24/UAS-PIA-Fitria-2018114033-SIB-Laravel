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
                <strong>DATA PROFILE PEGAWAI </strong> 
                <div class="card-body">
    </div>
    <div class=" text-right">
    <a href="{{ route('create-profile')}}" class="btn btn-success"> Tambah Data Profile Pegawai</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                        <div class="container">
        </div>
            <tr>
                <th>No</th>
                <th>Nama Pegawai </th>
                <!-- <th>Nomor Telepon</th> -->
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Jabatan</th>
                <th>Photo</th>
               
                <th>Aksi</th>
                
            </tr>
            @foreach ($dataProfile as $item)
           
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat}}</td>
                <td>{{ $item->jenis_kelamin}}</td>
                <td>{{ $item->jabatan}}</td>
                <td width="30%">
                
                <img src="{{ asset('fileprofile/'. $item->photo) }}" height="100px" width="100px" alt="" srcset="">
                </td>
                <td>
                   

                    <a href="{{url('edit-profile',$item->id) }}" class="btn btn-warning">Edit</a>
                                   
                    <a href="{{url('delete-profile',$item->id) }}" class="btn btn-danger">Hapus</a>
                   
             </td>
             
              </tr>
            
            @endforeach
          
            </table>
            <a href="/home" class="btn btn-primary">Kembali</a>
</div>
       
  </body>
</html>