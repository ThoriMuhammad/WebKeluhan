<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Keluhan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
  </head>
  <body>
  <header>
    <nav>
      <ul class="nav-right">
        <li><a href="{{ url('/') }}">Beranda</a></li>
        <li><a href="#">Berita</a></li>
        <li><a href="#">Pengaturan</a></li>
      </ul>
    </nav>
  </header>
    <div class="container mt-6">
        <div class="row justify-content-center">
            <div class="col-11">
            <div class="row align-items-center">
              <table border="2" id="data-list"class="table">
              <thead>
                <tr class="table-danger">
                  <th scope="col">No</th>
                  <th scope="col">Keluhan</th>
                  <th scope="col">TKP</th>
                  <th scope="col">Saran</th>
                  <th scope="col">Tanggal Keluhan</th>
                  <th scope="col">Dokumentasi</th>
                  <th scope="col">OPSI</th>
                  <th scope="col">Dokumentasi Sesudah</th>
                  <th scope="col">Status</th>
                </tr>
              
              </thead>
  <tbody>
                    @foreach($data as $keluhan)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td class="table-secondary">{{ $keluhan->keluhan}}</td>
                      <td>{{ $keluhan->TKP}}</td>
                      <td>{{ $keluhan->saran}}</td>
                      <td>{{ $keluhan->Tanggal_Keluhan}}</td>
                      <td><img src="/img/{{ $keluhan->name_file}} " width="80%" alt=""></td>
                      <td><form action="{{ route('edit.keluhan', $keluhan->id) }}" method="GET" class="d-inline">
                        <button type="submit" class="btn btn-success btn-sm">
                          Ubah
                        </button>
                        </form>|
                        <form action="{{ route('keluhan.destroy', $keluhan->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm">
                            Hapus
                          </button>
                        </form>
                      </td>
                      <td>{{ $keluhan->Dokumentasi}}</td>
                      <td class="{{ $keluhan->status == 'Segera Ditanggapi' ? 'status-segera' : ($keluhan->status == 'Selesai Ditanggapi' ? 'status-selesai' : '') }}">
                          {{ $keluhan->status }}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>