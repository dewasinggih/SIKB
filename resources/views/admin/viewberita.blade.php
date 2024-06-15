@extends('admin.layouts.app')
@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-sm-flex">
            &nbsp;
            <h1 class="h2 mb-0 text-gray-800">Detail Berita</h1>
        </div>
    </div>
    <div class="d-sm-flex  justify-content-between mb-0">
        <div class="col-lg-12 mb-4">
            <!-- buku -->
            <div class="card shadow border-bottom-primary mb-4">
                <div class="card-body d-sm-flex">
                    <div class="col-lg-3">
                        <img width="100%" style="border-radius: 10px;"
                            src="{{ asset('images/berita/' . $berita->photo) }}" alt="">
                    </div>

                    <br>

                    <div class="col-lg-9">
                        <!-- ID Buku -->
                        <div class="form-group"><label>ID Berita</label>
                            <h4 class="h4 text-gray-800"><b><?= $berita->id ?></b></h4>
                        </div>

                         <!-- Divider -->
                         <hr class="sidebar-divider">

                        <!-- Judul Buku -->
                        <div class="form-group"><label>Judul Berita</label>
                            <h4 class="h4 text-gray-800"><?= $berita->judul ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Kategori -->
                        <div class="form-group"><label>Kategori Berita</label>
                            <h4 class="h4 text-gray-800"><?= $berita->kategori->nama ?></h4>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                        <!-- Pengarang -->
                        <div class="form-group"><label>Isi Berita</label>
                            <p class="text-gray-800"><?= $berita->isi ?></p>
                        </div>

                        <!-- Divider -->
                        <hr class="sidebar-divider">

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

