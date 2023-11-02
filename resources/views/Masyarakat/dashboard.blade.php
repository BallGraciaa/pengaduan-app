<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/icons/bootstrap-icons.min.css">
    <style>
        body{
            background-image: url();
            background-repeat: no-repeat;
            background-size: 100;
        }
        .el{
            margin-top: 100px;
            /* margin-bottom: 100px; */
            margin-left: 45%;
            

        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="dashboard">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/login">Login</a>
              </li>
              <div class="container-fluid">
                <form class="d-flex" role="search">
                 
                  <a href="{{url('masyarakat/logout')}}">logout</a>
                </form>
              </div>
            </ul>
          </div>
        </div>
      </nav> 

      <div class="b-example-divider"></div>
<div class="container my-5">
  <div class="p-5 text-center bg-primary rounded-3 ">
    <h1 class="text-body-emphasis ">Layanan Aspirasi dan Pengaduan Online Rakyat</h1>
    <p class="lead">
        Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang
    </p>
  </div>
</div>



<div class="el" style="height: 100px;">
  <a href="{{url('masyarakat/tambah')}}" class="btn btn-outline-dark">Tulis Laporan Anda</a>
  
</div>

{{-- <div class="container">
  <div class="card shadow mt-4">
      <div class="card-header d-flex text-bg-primary bg-gradient justify-content-between">
          <h4 class="card-title">Data</h4>
          <a href="{{url('dashboard')}}" class="btn btn-light">
              <i class="bi bi-caret-left-square-fill"></i>&nbsp;Kembali
          </a>
      </div> --}}
      
      {{-- <div class="card-body">
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
                  <a href="tambah" class="btn btn-primary">tambah</a>
                  <a href="tampilan_utama" class="btn btn-primary">batal</a>
              </div>
          </form>
      </div>
  </div>
</div> --}}



     {{-- footer --}}
       <div class="b-example-divider"></div>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">&copy; 2023 Company, Inc</p>
  </footer>
</div>


</body>
</html>

