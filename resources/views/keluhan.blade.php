<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Keluhan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class='container mt-3'>
  <form action="{{route('proses.keluhan')}}" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Masukan Keluhan</label>
    <input type="text" class="form-control" name='keluhan' id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Masukan TKP</label>
    <input type="text" class="form-control" name='TKP' id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Saran</label>
    <input type="text" class="form-control" name='saran' id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Tanggal Keluhan</label>
    <input type="date" class="form-control" name='Tanggal_Keluhan' id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Dokumentasi</label>
    <input type="file" class="form-control" name='name_file' id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<div id="notification" class="alert alert-success mt-3 d-none" role="alert">
        Data telah berhasil ditambahkan!
      </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
      document.getElementById('keluhanForm').addEventListener('submit', function(event) {
        event.preventDefault();
        // Tampilkan notifikasi
        document.getElementById('notification').classList.remove('d-none');
        this.submit();
      });
    </script>
  </body>
</html>