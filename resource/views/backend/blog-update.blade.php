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
                    <form action="{{ admin_url("/blog-edit/$blog->id") }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Mevcut Fotoğraf</label>
                            <div class="col-md-9 col-sm-9 ">
                                <img src="{{ base_url($blog->img_path."/".$blog->small_img_url) }}" width="100">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Fotoğraf</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="file" class="form-control" name="img">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Blog Adı</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="name" value="{{ $blog->name }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">İçerik</label>
                            <div class="col-md-9 col-sm-9 ">
                                <textarea name="content" id="ckeditor">{{ $blog->content }}</textarea>
                                <script>
                                    CKEDITOR.replace( 'ckeditor' );
                                </script>
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 text-right">
                                <button type="submit" class="btn btn-success">Güncelle</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        
    </div>
@endsection

@push('css')
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>   
@endpush