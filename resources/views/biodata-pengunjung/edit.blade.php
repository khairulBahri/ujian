@extends('layouts.master')

@section('content')

<div class="container">



    @include('sweetalert::alert')


    <div class="header">
        <a class="btn btn-danger mt-4" href="/biodata-pengunjung">
            < Kembali</a>

                <h1 class="text-center mt-4 mb-4">Form Edit Tiket</h1>
    </div>


    <form action="/biodata-pengunjung/{{$biodata->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input value="{{$biodata->nama}}" name="nama" type="text" class="form-control" required>
        </div>

        <label for="floatingTextarea">Jenis Kelamin</label>
        <select class="form-select mb-3" name="jenis_kelamin" required>
            <option value="">Pilih...</option>
            <option value="L" @if($biodata->jenis_kelamin == "L") selected @endif>Laki-Laki</option>
            <option value="P" @if($biodata->jenis_kelamin == "P") selected @endif>Perempuan</option>
        </select>

        <label for="floatingTextarea">Alamat</label>
        <textarea name="alamat" required class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea">{{$biodata->alamat}}</textarea>


        <div class="mb-3">
            <label class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{$biodata->tanggal_lahir}}" required>
        </div>



        <input type="submit" name="submit" value="Save">


    </form>

</div>

@endsection