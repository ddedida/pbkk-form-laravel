<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="POST" action="/form" enctype="multipart/form-data">
            @csrf
            {{-- Email --}}
            <div class="mb-3">
              <label for="email" class="form-label">Alamat Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
              @error('email')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
    
            {{-- Nama --}}
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
                @error('nama')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
    
            {{-- Nomor HP --}}
            <div class="mb-3">
                <label for="nomorHp" class="form-label">Nomor Hp</label>
                <input type="text" class="form-control" id="nomorHp" name="nomorHp" required>
                @error('nomorHp')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
    
            {{-- GPA --}}
            <div class="mb-3">
                <label for="gpa" class="form-label">GPA</label>
                <input type="text" class="form-control" id="gpa" name="gpa" required>
                @error('gpa')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
    
            {{-- KRS --}}
            <div class="mb-3">
                <label for="krs" class="form-label">KRS</label>
                <input type="file" class="form-control" id="krs" name="krs" required>
                @error('krs')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
    
            {{-- Tombol Submit --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>