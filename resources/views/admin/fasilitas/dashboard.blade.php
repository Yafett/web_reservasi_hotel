@extends('layouts.app-admin')

{{-- @include('partials.navbar') --}}



@section('content')

<div class="container justify-content-right">



    <br>

    <table class="table">
        <thead class="thead" style="color : white; background-color: #e39aa7; border-bottom-style: hidden; border-top: hidden;">
            <tr>
                <th scope="col">Nama Fasilitas</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Image</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach($fasilitas as $f)

            <tr>
                <td>{{ $f->nama_fasilitas }}</td>
                <td>{{ $f->keterangan }}</td>
                <td>
                    <img src="{{ url('/gambar/'). '/' . $f->image }}" class="img-fluid">
                </td>
                <td>

                    <a href="/admin/fasilitas/edit/{{ $f->id_fasilitas }}" class="btn btn-warning btn-sm active" role="button" aria-pressed="true">Edit</a>


                    <a href="/admin/fasilitas/hapus/{{ $f->id_fasilitas }}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Hapus</a>


                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex flex-column align-items-end">

        <a href="/admin/fasilitas/tambah" type="button" class="btn btn-circle btn-sm" style="background-color: #e39aa7; border-color: #e39aa7; color : white;">+</a>

    </div>


</div>


@endsection
