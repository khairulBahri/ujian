@extends('layouts.app')

@section('content')

<div class="container">

    @include('sweetalert::alert')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Check In</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Aksi</th>

            </tr>
        </thead>
        <tbody>
            @foreach($biodata as $key => $data)
            <tr>
                <th scope="row">{{$data->ket + 1}}</th>
                <td>{{$data->id}}</td>
                <td>{{$data->nama}}</td>
                <td>{{$data->alamat}}</td>
                <td>{{$data->jenis_kelamin == "L" ? "Laki-Laki" : "Perempuan"}}</td>
                <td>{{$data->check_in == true ? 'Sudah Check In' : 'Belum Check in'}}</td>
                <td>{{$data->tanggal_lahir}}</td>

                <td>
                    <a class="btn btn-warning" href="/biodata-pengunjung/{{$data->id}}/edit">edit</a>
                    @if($data->check_in == null)
                    <a class="btn btn-info" href="/biodata-pengunjung/{{$data->id}}/check">Check In</a>
                    @endif

                    <form action="/biodata-pengunjung/{{$data->id}}" method="POST">
                        @csrf
                        @method('delete')
                        <input class="btn btn-danger" type="submit" value="Delete">
                    </form>



                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    @endsection

</div>