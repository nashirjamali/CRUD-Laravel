<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Tambah</title>
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
                    <h3>Input Data Pegawai</h3>

                    <form action="/pegawai/store" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="exampleInputNama">Nama</label>
                            <input type="text" name="nama" required="required" class="form-control" id="exampleInputNama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputJabatan">Jabatan</label>
                            <input type="text" name="jabatan" required="required" class="form-control" id="exampleInputJabatan" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputJabatan">Umur</label>
                            <input type="number" name="umur" required="required" class="form-control" id="exampleInputUmur" placeholder="Umur">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" required="required" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"></textarea>
                        </div>


                        <div class="row">
                            <div class="col-sm-8">
                                <div class="save-button">
                                    <input class="btn btn-success btn-sm" type="submit" value="Save">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="d-flex justify-content-end">
                                    <a class="btn btn-dark btn-sm" href="/pegawai">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- secton-1 -->


    <!-- <form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        Nama <input type="text" name="nama" required="required"> <br />
        Jabatan <input type="text" name="jabatan" required="required"> <br />
        Umur <input type="number" name="umur" required="required"> <br />
        Alamat <textarea name="alamat" required="required"></textarea> <br />
        <input type="submit" value="Simpan Data">
    </form> -->
</body>
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
<script src="{{ asset('./bootstrap/js/jquery-3.3.1.slim.min.js') }}"></script>
<script src="{{ asset('./bootstrap/js/popper.min.js') }}"></script>
<script src="{{ asset('./bootstrap/js/bootstrap.min.js') }}"></script>

</html> 