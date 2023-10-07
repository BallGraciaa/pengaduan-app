<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <title>Login admin</title>
</head>
<body>
  <div id="min" class="d-flex align-items-center min-vh-100">
    <div class="container">
        <div class="card shadow m-auto" style="width: 400px;">
            <div class="card-body">
                <h4 class="h4">Selamat Datang</h4>
                
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

                <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" id="user" placeholder="Username">
                        @error('user')
                            <div class="form-text">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Kata Sandi</label>
                        <input type="text" class="form-control" name="password" id="sandi" placeholder="Kata Sandi">
                        @error('nama')
                        <div class="form-text">
                            {{$message}}
                        </div>
                    @enderror
                    </div>
                    <div class="mb-3">
                      <label for="role" class="form-label">Role</label>
                      <input type="text" class="form-control" name="role" id="role" placeholder="Role">
                      @error('nama')
                      <div class="form-text">
                          {{$message}}
                      </div>
                  @enderror
                  </div>
                    <div class="mb-3">
                        <button class="btn form-control btn-primary mb-2">Login</button>
                        <button class="btn form-control btn-outline-success mb-2" type="reset">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>