<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tanggapan</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>
<body>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="admin/">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin/validasi">validasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="admin/tanggapan">Tanggapan</a>
                </li>
              <div class="container-fluid">
                <form class="d-flex" role="search">
                </form>
              </div>
            </ul>
          </div>
        </div>
      </nav> 

      {{-- body --}}
      <div class="container">
        <div class="card shadow">
            <div class="card-header text-bg-white">
                <h4 class="h4 card-title">Data Laporan Masyarakat</h4>
                <div class="card-body">
                    <table id="tb_validasi" class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nik</th>
                                <th>Tanggal</th>
                                <th>Isi Laporan</th>
                              <th>foto</th>
                              <th>status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($merek as $item)
                                <tr>
                                    <td>{{$item->id_pengaduan}}</td>
                                    <td>{{ $item->nik}}</td>
                                    <td>{{ $item->tgl_pengaduan}}</td>
                                    <td>{{ $item->isi_laporan }}</td>
                                    <td>{{ $item->foto }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        <div class="d-flex gap-2 mb-3">
                                            <select name="" id=""></select>
                                            
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="/datatable/datatables.min.js"></script>
    <script>
        $('#tb_validasi').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });
    </script>

</body>
</html>