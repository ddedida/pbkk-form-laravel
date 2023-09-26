<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Hasil Submit</h1>
        <div class="mt-4">
            <p>Data berhasil disubmit dengan detail sebagai berikut:</p>
            <ul class="list-group">
                <li class="list-group-item"><strong>Email:</strong> {{ $results['email'] }}</li>
                <li class="list-group-item"><strong>Nama:</strong> {{ $results['nama'] }}</li>
                <li class="list-group-item"><strong>Nomor Hp:</strong> {{ $results['nomorHp'] }}</li>
                <li class="list-group-item"><strong>GPA:</strong> {{ $results['gpa'] }}</li>
                <li class="list-group-item"><strong>KRS:</strong> <img src="{{ asset('storage/images/' . $results['krs']) }}" alt="Gambar" class="img-fluid"></li>
            </ul>
        </div>
    </div>
</body>
</html>