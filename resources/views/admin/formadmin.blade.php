<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <style>
    /* Gaya CSS untuk tampilan desktop */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      display: flex;
    }
    nav li {
      margin-right: 20px;
    }
    nav a {
      color: #fff;
      text-decoration: none;
    }
    main {
      display: flex;
      padding: 20px;
    }
    .sidebar {
      background-color: #dee2e6;
      padding: 20px;
      width: 220px;
      margin-right: 20px;
    }
    .content {
      flex: 1;
    }
    section {
      margin-bottom: 30px;
    }
  </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <header>
    <h2>MovFast</h2>
    <nav>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Berita</a></li>
        <li><a href="#">Pengaturan</a></li>
        <li><a href="{{ url('logout') }}">Logout</a></li>
      </ul>
    </nav>
  </header>
  <main>


    <div class="content">
      <section>
        <h2>Daftar Keluhan</h2>
        <div class="row justify-content-center">
        <div class="row align-items-center">
          <table border="2" id="data-list"class="table">
              <thead>
                <tr class="table-danger col-7">
                  <th scope="col">No</th>
                  <th scope="col">Keluhan</th>
                  <th scope="col">TKP</th>
                  <th scope="col">Saran</th>
                  <th scope="col">Tanggal Keluhan</th>
                  <th scope="col">Dokumentasi</th>
                  <th scope="col">OPSI</th>
                  <th scope="col">Dokumentasi After</th>
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
                      <td class="col-3">{{ $keluhan->Tanggal_Keluhan}}</td>
                      <td>{{ $keluhan->Dokumentasi}}</td>
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
                        <td><select class="form-select" aria-label="Default select example">
                        <option selected>Segera Ditanggapi</option>
                        <option value="belum">Segera Ditanggapi</option>
                        <option value="sudah">Selesai Ditanggapi</option>
                        </select></td>
                        
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
            </div>
      </section>
    </div>
  </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>