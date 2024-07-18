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
    .status-segera {
    color: white;
    font-weight: bold;
    border: 2px solid red;
    background-color: red;
    padding: 5px;
    border-radius: 5px;
    display: inline-block;
  }
  .status-selesai {
    color: white;
    font-weight: bold;
    border: 2px solid green;
    background-color: green;
    padding: 5px;
    border-radius: 5px;
    display: inline-block;
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
        <li><a href="#">Keluhan</a></li>
        <li><a href="#">Berita</a></li>
        <li><a href="#">Pengaturan</a></li>
        <li><a href="{{ url('logout') }}">Logout</a></li>
      </ul>
    </nav>
  </header>
  <main>
  <div class="sidebar sidebar-light">
  <p class="fs-3 fw-bolder">Menu</p>
  <ul class="nav flex-column">
    <!-- <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">
        <span class="fas fa-plus mr-2"></span>
        Profil
      </a>
    </li> -->
    <li class="nav-item">
      <a class="nav-link" href="{{ url('keluhan') }}">
        <span class="fas fa-plus mr-2"></span>
        Tambahkan Keluhan
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ url('data-keluhan') }}">
        <span class="fas fa-file-alt mr-2"></span>
        Data Keluhan
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="fas fa-newspaper mr-2"></span>
        Berita
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">
        <span class="fas fa-cog mr-2"></span>
        Pengaturan
      </a>
    </li>
  </ul>
</div>


    <div class="content">
      <section>
        <h2>Profil Pengguna</h2>
        <p>Nama: {{$user->name}}</p>
        <p>NIK: {{$user->nik}}</p>
      </section>
      <section>
        <h2>Daftar Keluhan</h2>
        <table border="2" id="data-list"class="table">
              <thead>
                <tr class="table-danger col-7">
                  <th scope="col">No</th>
                  <th scope="col">Keluhan</th>
                  <th scope="col">TKP</th>
                  <th scope="col">Saran</th>
                  <th scope="col">Tanggal Keluhan</th>
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
                      <td class="{{ $keluhan->status == 'Segera Ditanggapi' ? 'status-segera' : ($keluhan->status == 'Selesai Ditanggapi' ? 'status-selesai' : '') }}">
                          {{ $keluhan->status }}
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
      </section>
    </div>
  </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>