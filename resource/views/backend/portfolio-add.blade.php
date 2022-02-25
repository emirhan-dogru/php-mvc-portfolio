@extends('backend.layout.app')

@section('content')
    <div class="right_col" role="main">

        <div class="col-md-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>About</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br>
                    <form action="{{ admin_url('/portfolio-add') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Fotoğraf</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="file" class="form-control" name="img">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Portfolyo adı</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="name">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Kategori Adı</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="category_name">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Url</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="url" autocomplete="off">
                                <span>url adresi kullanmıycaksanız <strong>boş</strong> bırakın</span>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 text-right">
                                <button type="submit" class="btn btn-success">Ekle</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        
    </div>
@endsection