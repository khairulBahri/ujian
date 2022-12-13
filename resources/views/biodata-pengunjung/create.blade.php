@extends('layouts.master')

@section('content')

<div class="container">

    <a class="btn btn-danger mt-4" href="/">
        < Kembali</a>

            @include('sweetalert::alert')

            <div class="header">
                <h1 class="text-center mt-4 mb-4">Form Pemesanan Tiket</h1>
            </div>


            <form action="/biodata-pengunjung/store" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" required>
                </div>

                <label for="floatingTextarea">Jenis Kelamin</label>
                <select class="form-select mb-3" name="jenis_kelamin" required>
                    <option value="">Pilih...</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select>

                <label for="floatingTextarea">Alamat</label>
                <textarea name="alamat" required class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea"></textarea>


                <div class="mb-3">
                    <label class="form-label">Tanggal Lahir</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>
                </div>



                <input type="submit" name="submit" value="Save">


            </form>

</div>

@endsection