@extends('layouts.base')

@section('title', 'List of peoples')

@section('container')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">
                <h3>List of peoples</h3>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <a href="/peoples/create" class="btn btn-primary my-3">Tambah Data</a>
                <ul class="list-group">
                    @foreach ($peoples as $people)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $people->nama }}
                    <a href="/peoples/{{ $people->id }}" class="badge badge-primary badge-pill">Detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection