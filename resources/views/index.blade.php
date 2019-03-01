<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pegawai</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href=" {{ asset( '/assets/bootstrap/css/bootstrap.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
</head>

<body>

    <style type="text/css">
        .pagination li {
            float: left;
            list-style-type: none;
            margin: 2px;
        }
    </style>

    <!-- section-1 -->
    <section id="section-1">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h3>Data Pegawai</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="insert-button">
                                    <a class="btn btn-success btn-sm" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="d-flex justify-content-end">
                                    <form action="/pegawai/cari" method="GET" class="form-inline">
                                        <input class="form-control form-control-sm" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
                                        <input class="btn btn-dark btn-sm" type="submit" value="Cari">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div>
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jabatan</th>
                                        <th scope="col">Umur</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 0; ?>
                                    @foreach($pegawai as $p)
                                    <?php $no++; ?>
                                    <tr>
                                        <th scope="row">{{ $no }}</th>
                                        <td>{{ $p->pegawai_nama }}</td>
                                        <td>{{ $p->pegawai_jabatan }}</td>
                                        <td>{{ $p->pegawai_umur }}</td>
                                        <td>{{ $p->pegawai_alamat }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
                                            |
                                            <a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- section-1 -->

    <!-- footer -->
    <footer>
        <div class="container">
            <nav>
                <ul class="pagination">
                    <li class="page-item">
                    {{ $pegawai->links() }}
                    </li>                 
                </ul>
            </nav>
        </div>
    </footer>
    <!-- footer -->
</body>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('./bootstrap/js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('./bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('./bootstrap/js/bootstrap.min.js') }}"></script>

</html> 