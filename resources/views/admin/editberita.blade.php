@extends('admin.layouts.app')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Berita</h3>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">                                    
        <!--- content -->

        <div class="row">
        <!-- column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h3 class="card-title m-b-5"><span class="lstick"></span>Edit Data Berita </h3>
                        </div>
                        
                        <div class="table-responsive">
                        <form class="form-horizontal form-material" method="POST" action="{{ route('admin.update.berita') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $berita->id }}">
                            <div class="form-group">
                                <label class="col-md-12">Judul Berita</label>
                                <div class="col-md-12">
                                    <input type="text" name="judulberita" value="{{ $berita->judul }}" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Kategori</label>
                                <div class="col-md-12">
                                    <select name="kategori" id="kategori" class="form-control form-control-line">
                                        @foreach($kategori as $k)
                                            <option value="{{ $k->id }}">{{ $k->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Photo</label>
                                <div class="col-md-12">
                                    <input type="file" name="photo" class="form-control form-control-line">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Isi Berita</label>
                                <div class="col-md-12">
                                    <textarea name="isiberita" id="isiberita" cols="30" rows="10" class="form-control form-control-line"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success">Update</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--- content -->
    </div>
</div>
@endsection