@extends('backend.layout.app')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Yazılarım</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                            <a href="{{ admin_url('/blog-add') }}" class="btn btn-success btn-sm pull-right">Yazı Ekle</a>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12">
                    <div class="x_panel">
                        <div class="x_content">

                            <div class="row">
                                @foreach ($blogs as $blog)
                                    <div class="col-md-55">
                                        <div class="thumbnail">
                                            <div class="image view view-first">
                                                <img style="width: 100%; display: block;" src="{{ base_url($blog->img_path."/".$blog->small_img_url) }}"
                                                    alt="image" />
                                                <div class="mask no-caption">
                                                    <div class="tools tools-bottom">
                                                        <a href="{{ admin_url('/blog-edit/'.$blog->id) }}"><i class="fa fa-pencil"></i></a>
                                                        <a href="{{ admin_url('/blog-delete/'.$blog->id) }}" onclick="return confirm('Bu yazıyı silmek üzeresiniz?')"><i class="fa fa-times"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <p><strong>{{ $blog->name }}</strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
