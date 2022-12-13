@extends('layouts.master')

@section('content')

<style>
    body {
        background-color: #FAF8F1;
    }
</style>

<div class="container">


    <div class=" header">
        <h1 class="text-center mt-4">Selamat Datang Di Website Pendaftaran Tiket Konser</h1>
    </div>
    <div class="kontent text-center mt-4">
        <a class="btn btn-success text-center" href="/biodata-pengunjung/create">Daftar</a>
    </div>

    <div class="kontent text-center mt-4">
        <a class="btn btn-info text-center" href="login">Login Admin</a>
    </div>



</div>

@endsection