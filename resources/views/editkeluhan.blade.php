<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Keluhan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class='container mt-3'>
    <h2>Edit Keluhan</h2>
    <form action="{{ route('keluhans.update', $keluhan->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="keluhan" class="form-label">Masukan Keluhan</label>
            <input type="text" class="form-control" name="keluhan" id="keluhan" value="{{ $keluhan->keluhan }}">
        </div>
        <div class="mb-3">
            <label for="tkp" class="form-label">Masukan TKP</label>
            <input type="text" class="form-control" name="TKP" id="tkp" value="{{ $keluhan->TKP }}">
        </div>
        <div class="mb-3">
            <label for="saran" class="form-label">Saran</label>
            <input type="text" class="form-control" name="saran" id="saran" value="{{ $keluhan->saran }}">
        </div>
        <div class="mb-3">
            <label for="tanggal_keluhan" class="form-label">Tanggal Keluhan</label>
            <input type="date" class="form-control" name="Tanggal_Keluhan" id="tanggal_keluhan" value="{{ $keluhan->Tanggal_Keluhan }}">
        </div>
        <div class="mb-3">
            <label for="name_file" class="form-label">Dokumentasi</label>
            <input type="file" class="form-control" name="name_file" id="name_file" value="{{ $keluhan->name_file }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
