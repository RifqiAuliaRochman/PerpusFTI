@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <h1 class="text-center mb-5">DAFTAR BUKU PERPUS FTI</h1>

        @foreach ($bukus as $buku)
        <div class="col-md-4">
            <div class="card">
                <img src="img/cover1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text text-end">Category : {{ $buku->Category }}</p>
                    <h5 class="card-title">{{ $buku->Title }}</h5>
                    <p class="card-text">
                        Author : {{ $buku->Author }} <br>
                        Year : {{ $buku->Year }} <br>
                        <hr>
                        Status : <br>
                        <span class="badge text-bg-success">{{ $buku->Status }}</span>
                    </p>
                    <a href="{{ url('detail') }}/{{ $buku->ID }}" class="btn btn-primary">Lihat Detail</a>
                </div>
              </div>
        </div>
        @endforeach

    </div>
</div>
@endsection
