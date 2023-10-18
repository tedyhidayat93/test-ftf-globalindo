@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center flex-column mb-4 mt-5">
                <h2 class="tex-center">DAFTAR DATA MEMBER</h2>
                <a href="/" class="btn btn-success">+ Tambah Data</a>
            </div>
            
            <div class="card border-0 mt-4 shadow">
                <div class="card-body p-0">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>HANDPHONE</th>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>AGAMA</th>
                                <th>HOBBY</th>
                                <th>THN LAHIR</th>
                                <th>UMUR</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($members as $key => $item)
                                <tr>
                                    <td>{{ $key + 1 }}.</td>
                                    <td>{{ $item->handphone }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->agama }}</td>
                                    <td>{{ $item->hobby }}</td>
                                    <td>{{ $item->thn_lahir }}</td>
                                    <td>{{ $item->umur }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
