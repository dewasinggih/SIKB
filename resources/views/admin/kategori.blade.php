@extends('admin.layouts.app')
@section('content')
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Kategori</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <a data-target="#tambahModal" data-toggle="modal" class="btn waves-effect waves-light btn-success pull-right hidden-sm-down"> Tambah Data</a>
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
                            <h3 class="card-title m-b-5"><span class="lstick"></span>Data Kategori </h3>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($kategori as $index => $m)
                                        <tr>
                                            <td>{{ ++$index }}</td>
                                            <td>{{ $m->nama }}</td>
                                            <td>
                                            <a href="{{ route('admin.kategori.delete', ['id' => $m->id]) }}" class="waves-effect waves-dark">
                                                <i class="mdi mdi-delete-forever btn btn-danger"></i>
                                            </a>

                                            <a href="{{ route('admin.kategori.edit', ['id' => $m->id]) }}" class="waves-effect waves-dark">
                                                <i class="mdi mdi-table-edit btn btn-success"></i>
                                            </a>
                                            </td>
                                        </tr>
                                    @endforeach                                    
                                </tbody>
                            </table>

                            <!-- Form tambah -->

                            <!-- medium modal -->
                            <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content mt-5">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body" id="mediumBody">
                                            <!-- form -->

                                            <div class="col-lg-8 col-xlg-9 col-md-7">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <form class="form-horizontal form-material" method="POST" action="{{ route('admin.save.kategori') }}">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label class="col-md-12">Nama Kategori</label>
                                                                <div class="col-md-12">
                                                                    <input type="text" name="namakategori" class="form-control form-control-line">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <button class="btn btn-success">Tambah</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- end form -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- End Form tambah -->

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--- content -->
    </div>
</div>

<script>
    // display a modal (small modal)
    $(document).on('click', '#smallButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#smallModal').modal("show");
                $('#smallBody').html(result).show();
            },
            complete: function() {
                $('#loader').hide();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            },
            timeout: 8000
        })
    });

    // display a modal (medium modal)
    $(document).on('click', '#mediumButton', function(event) {
        event.preventDefault();
        let href = $(this).attr('data-attr');
        $.ajax({
            url: href,
            beforeSend: function() {
                $('#loader').show();
            },
            // return the result
            success: function(result) {
                $('#mediumModal').modal("show");
                $('#mediumBody').html(result).show();
            },
            complete: function() {
                $('#loader').hide();
            },
            error: function(jqXHR, testStatus, error) {
                console.log(error);
                alert("Page " + href + " cannot open. Error:" + error);
                $('#loader').hide();
            },
            timeout: 8000
        })
    });

</script>
@endsection