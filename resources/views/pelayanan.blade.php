@extends('layouts.app')
@section('content')
<main style="margin-top : 8%" class="container  ">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark bg-secondary">
    <div class="col-md-6 px-0">
      <h1 class="display-4 ">INFOMASI PELAYANAN KALURAHAN BEDOYO</h1>
      <p class="lead my-3">Infomasi pelayanan dan syarat pembuatan berkas-berkas akan dipublikasikan pada website Kalurahan Bedoyo Kapenawon Ponjong Kabupaten Gunungkidul </p>
    </div>
  </div>
</main>
<div style="margin-bottom : 10%" class="container  text-center">
    <div class="row ">
        <div class="col-sm-4 ">
            <div class="thumbnail">
                <img src="img/ktp.png" width="100%" alt="Cinque Terre">
                <div class="caption">
                    <h4>Infomasi Pelayanan Kartu Tanda Penduduk</h4>
                    <p><a href="layananktp" class="btn btn-secondary btn-block" role="button">Lihat</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="img/kk.png" width="100%" alt="Cinque Terre">
                <div class="caption">
                    <h4>Infomasi Pelayanan Kartu Keluarga</h4>
                    <p><a href="layanankk" class="btn btn-secondary btn-block" role="button">Lihat</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="img/lahir.png" width="100%" alt="Cinque Terre">
                <div class="caption">
                    <h4>Infomasi Pelayanan Surat Kelahiran</h4>
                    <p><a href="lahir" class="btn btn-secondary btn-block" role="button">Lihat</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="img/kematian.png"  width="100%" alt="Cinque Terre">
                <div class="caption">
                    <h4>Infomasi Pelayanan Surat Kematian</h4>
                    <p><a href="kematian" class="btn btn-secondary btn-block " role="button">Lihat</a></p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="thumbnail">
                <img src="img/pindah.png"  width="100%" alt="Cinque Terre">
                <div class="caption">
                    <h4>Infomasi Pelayanan Surat Pindah</h4>
                    <p><a href="pindah" class="btn btn-secondary btn-block " role="button">Lihat</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection