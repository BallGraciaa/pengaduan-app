<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/icons/bootstrap-icons.min.css">
</head>
<body class="bg-body-secondary">
    <div class="container">
        <div class="card shadow mt-4">
            <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
                <h4 class="card-title">Data</h4>



                @if(session('pesan'))
                <div class="alert alert-success" role="alert">
                   {{session('pesan')}} 
                  </div>
                @endif
                
                @if($errors->any())
                <div class="alert alert-success" role="alert">
                   Gagal Login
                  </div>
                @endif


                <a href="{{url('dashboard')}}" class="btn btn-light">
                    <i class="bi bi-caret-left-square-fill"></i>&nbsp;Kembali
                </a>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    @csrf
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">NISN</label>
                        <div class="col-10">
                            <input type="number" class="form-control" name="nisn">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">NAMA</label>
                        <div class="col-10">
                            <input type="teks" class="form-control" name="nama">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">TANGGAL</label>
                        <div class="col-10">
                            <input type="teks" class="form-control" name="teks">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Isi Laporan</label>
                        <div class="col-10">
                            <input type="teks" class="form-control" name="isi_laporan">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Lokasi</label>
                        <div class="col-10">
                            <input type="teks" class="form-control" name="kode_kelas">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-form-label col-2">Tanggapan</label>
                        <div class="col-10">
                            <input type="teks" class="form-control" name="kode_kelas">
                        </div>
                    </div>
                    <div class="mb-3">
                        {{-- <button class="btn btn-success" type="reset"><i class="bi bi-x-square-fill"></i> Batal</button>
                        <button class="btn btn-primary" type="submit">
                            <i class="bi bi-save-fill"></i>&nbsp;Simpan  
                        </button> --}}
                        <a href="" class="btn btn-primary">tambah</a>
                        <a href="dashboard" class="btn btn-primary">batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>