<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mata Kuliah</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container py-5">
    <h1 class="text-center">Daftar Mata Kuliah</h1>
    <div class="row py-5">
    @forelse ($matakuliahs as $matakuliah)
    <div class="py-2 col-md-6 ">
        <div class="list-group-item bg-light "> 
            <div class="d-flex">
                <div class="p-1 font-weight-bold">{{$matakuliah->nama_mk}}</div>
                <div class="p-1 font-weight-bold" style="color: maroon">{{"( ". $matakuliah->kode_mk . " )"}}</div>
                <div class="ml-auto p-1">{{$matakuliah->sks. " SKS"}}</div>
            </div>
                <div class="p-1">{{$matakuliah->nama_dosen}}</div>
        </div>
    </div>
    @empty
    <td>Tidak ada data . . .</td>
    @endforelse
    </div>
    </div>
</body>
</html>