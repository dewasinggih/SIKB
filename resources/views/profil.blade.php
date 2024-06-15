@extends('layouts.app')
@section('content')
<main style="margin-top : 10%;" class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark bg-secondary">
    <div class="col-md-6 px-0">
      <h1 class="display-4 ">PROFIL KALURAHAN BEDOYO</h1>
      <p class="lead my-3">Bedoyo (bahasa Jawa: Bedhaya) adalah desa di kecamatan Ponjong, Gunungkidul, Daerah Istimewa Yogyakarta, Indonesia. </p>
    </div>
  </div>
</main>
<div class="container my-2 "  >
  <p>Kelurahan adalah pembagian wilayah administratif di Indonesia di bawah kecamatan. Kelurahan merupakan wilayah kerja lurah sebagai perangkat daerah kota. Kelurahan dipimpin oleh seorang lurah yang berstatus sebagai Pegawai Negeri Sipil. Kelurahan merupakan unit pemerintahan terkecil setingkat dengan desa. Berbeda dengan desa, kelurahan memiliki hak mengatur wilayahnya lebih terbatas.</p>
</div>
<div class="container my-2 "  >
    <div class="row mb-6">
        <div class="col-md-6 h-100">
            <div class="p-2 text-center text-danger">
                <h4>VISI</h4>
            </div>
            <div class="p-2  text-left"><p> 
                1. Makin meningkatnya peran masyarakat dalam pembangunan.</p>
                2. Makin baiknya kebijakan-kebijakan pemerintah desa dalam penyelengaraan pemerintahan desa.</p>
                3. Makin baiknya kualitas pembangunan desa.</p>
                4. Makin meningkatnya kesejahteraan kehidupan dari masyarakat</p>
            </div>
        </div>
        <div class="col-md-6 h-100">
            <div class="p-2 text-center text-danger">
                <h4>MISI</h4>
            </div>
            <div class="p-2  text-left">
                <p>
                1. Menyelenggarakan pemerintahan desa yang efisien, efektif, dan bersih dengan mengutamakan masyarakat.</p>
                2. Meningkatkan sumber sumber pendanaan pemerintahan dan pembangunan desa.</p>
                3. Mengembangkan pemberdayaan masyarakat dan kemitraan dalam pelaksanaan pembangunan desa.</p>
                4. Meningkatkan kualitas sumber daya manusia dalam pembangunan desa yang berkelanjutan.</p>
                5. Mengembangkan perekonomian desa.</p>
                6. Menciptakan rasa aman, tentram, dalam suasana kehidupan desa yang demokratis dan agamis</p>
            </div>
        </div>
    </div>
</div>
<!-- struktur pegawai -->
<div class="container my-2 "  >
    <div class="row mb-6">
        <div class="col-md-12 h-100">
            <div class="d-flex justify-content-center" >
                    <div class="p-2  text-left">
                        <img src="img/STRUKTURAL PEGAWAI.png"  width="100%" >
                    </div>
            </div>
            <div class="p-2  text-center text-danger"><h4>STRUKTUR PEMERINTAHAN</h4>
                </div>
                    <div class="p-2  text-left">
                        <p> 
                        Pemerintahan Kalurahan Bedoyo yang ada terdiri dari :</p>
                        -  LURAH     : 1 Orang</p>
                        -  CARIK     : 1 Orang</p>
                        -  Kepala Seksi   : 3 Orang</p>
                        -  Kepala Urusan    : 3 Orang </p>
                        -  Dukuh     : 9 Orang</p>
                        -  THL     : 1 Orang</p>
                        <p><a  href="/datapegawai" class="btn btn-secondary btn-block" role="button">DATA PEGAWAI</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- diagram lingkaran jumlah penduduk -->
<div class="container my-2 "  >
    <div class="row mb-6">
        <div class="col-md-6 h-100">
            <div class="p-2  text-center text-danger ">
                <h4>JUMLAH PENDUDUK</h4>
            </div>
            <div class="p-2  text-left"><p> 
                Diagram lingkaran disamping adalah jumalah penduduk disetiap Dusun yang berada di kawasan Kalurahan Bedoyo Kapenawon Ponjong Kabupaten Gunungkidul.</p>
                Dari 9 Dusun total : <strong class="text-success">4423 jiwa</strong></p>
            </div>
        </div>
        <div class="col-md-6 h-100">
            <div class="p-2  text-left">
                <img class="" src="img/diling.png"  width="100%" >
            </div>
        </div>
    </div>
</div>
@endsection