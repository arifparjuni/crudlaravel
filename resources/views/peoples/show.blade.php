@extends('layouts.base')

@section('title', 'form tambah data')

@section('container')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">
                <div class="card bg-light mb-3">
                    <div class="card-header">Detail People</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $people->nama }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $people->email }}</h6>
                            <p class="card-text">{{ $people->alamat }}</p>
                            <a href="{{ url('/peoples') }}">Kembali</a>
                            <a href="/peoples/{{ $people->id }}/edit" class="btn btn-success">Edit</a>
                            <form action="{{ $people->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Anda yakin mau hapus?')">Hapus</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection