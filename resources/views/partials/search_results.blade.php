<!-- resources/views/search.blade.php -->

@extends('user-app.app')

@section('content')
<div class="container mt-4">
    <h2>Search Results for "{{ $query }}"</h2>
    <div class="row">
        @foreach ($beasiswas as $beasiswa)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="{{ asset('storage/' . $beasiswa->image) }}" alt="{{ $beasiswa->title }}">
                <div class="card-body">
                    <h4 class="card-title">{{ $beasiswa->title }}</h4>
                    <p class="card-text">Beasiswa: {{ $beasiswa->jenis_pendidikan }}</p>
                </div>
                <div class="card-body text-center">
                    <a href="{{ route('detail', ['id' => $beasiswa->id]) }}" class="btn btn-primary w-100">Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
