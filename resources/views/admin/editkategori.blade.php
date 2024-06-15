@extends('admin.layouts.app')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Kategori</h3>
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
                            <h3 class="card-title m-b-5"><span class="lstick"></span>Edit Data Kategori </h3>
                        </div>
                        
                        <div class="table-responsive">
                        <form class="form-horizontal form-material" method="POST" action="{{ route('admin.update.kategori') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{ $kategori->id }}">
                            <div class="form-group">
                                <label class="col-md-12">Nama Kategori</label>
                                <div class="col-md-12">
                                    <input type="text" name="namakategori" value="{{ $kategori->nama }}" class="form-control form-control-line">
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