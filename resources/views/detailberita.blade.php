@extends('layouts.app')
@section('content')
<main style="margin-top : 8%" class="container ">
    <div class="p-4 p-md-5 mb-4 rounded text-bg-dark bg-secondary">
        <div class="col-md-6 px-0">
            <h1 class="display-4 ">KONTAK PELAYANAN KALURAHAN BEDOYO</h1>
            <p class="lead my-3">Infomasi pelayanan dan keluhan bisa menghubungi admin Kalurahan Bedoyo Kapenawon Ponjong Kabupaten Gunungkidul melalui kontak di bawah.</p>
        </div>
    </div>
    <div class="container my-5 "  > 
        <h1 style="margin-bottom : 5%" class="text-center">{{ $berita->judul }}</h1>
        <img style="margin-left : 10%" src="{{ asset('images/berita/' . $berita->photo) }}" width="80%" >
        <p style="margin-top : 4%">{{ $berita->isi }}</p>
    </div>
</main>
@endsection