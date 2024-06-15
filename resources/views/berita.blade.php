@extends('layouts.app')
@section('content')
<main style="margin-top : 8%" class="container ">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark bg-secondary">
        <div class="col-md-6 px-0">
        <h1 class="display-4 ">BERITA SEPUTAR KALURAHAN BEDOYO</h1>
        <p class="lead my-3">Segala kegiatan dan agenda akan dipublikasikan pada website Kalurahan Bedoyo Kapenawon Ponjong Kabupaten Gunungkidul </p>
        </div>
    </div>
    <div class="row mb-2">
        @foreach($berita as $b)
        <div class="col-md-6 mt-2">
            <div class="col-auto border rounded p-3">
                <img src="{{ asset('images/berita/' . $b->photo) }}" width="100%" >
                <strong class="d-inline-block mb-2 text-primary">{{ $b->kategori->nama }}</strong>
                <h3 class="mb-0">{{ $b->judul }}</h3>
                <div class="mb-1 text-muted">{{ $b->created_at }}</div>
                <p class="card-text mb-auto">{{ substr($b->isi, 0, 150) }}</p>
                <p><a href="{{ route('berita-detail', ['id' => $b->id]) }}" class="btn btn-secondary btn-block " role="button">Baca Selengkapnya</a></p>
            </div>
        </div>
        @endforeach
    </div>
</main>  
@endsection