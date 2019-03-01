<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href=" {{ asset( '/assets/bootstrap/css/bootstrap.min.css' ) }}">
    <link rel="stylesheet" href="{{ asset('/css/save-style.css') }}">
</head>

<body>
    <!-- secton-1 -->
    <section id=section-1>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h3>Update Data Pegawai</h3>

                    @foreach($pegawai as $p)
                    <form action="/pegawai/update" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br />
                        <div class="form-group">
                            <label for="exampleInputNama">Nama</label>
                            <input type="text" name="nama" required="required" class="form-control" id="exampleInputNama" value="{{ $p->pegawai_nama }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputJabatan">Jabatan</label>
                            <input type="text" name="jabatan" required="required" class="form-control" id="exampleInputJabatan" value="{{ $p->pegawai_jabatan }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputJabatan">Umur</label>
                            <input type="number" name="umur" required="required" class="form-control" id="exampleInputUmur" value="{{ $p->pegawai_umur }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" required="required" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $p->pegawai_alamat }}</textarea>
                        </div>


                        <div class="row">
                            <div class="col-sm-8">
                                <div class="save-button">
                                    <input class="btn btn-success btn-sm" type="submit" value="Update">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-dark btn-sm" href="/pegawai">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</body>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('./bootstrap/js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('./bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('./bootstrap/js/bootstrap.min.js') }}"></script>

</html> 