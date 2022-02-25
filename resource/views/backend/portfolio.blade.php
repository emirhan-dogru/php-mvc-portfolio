@extends('backend.layout.app')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Portfolyom</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right ">
                        <a href="{{ admin_url('/portfolio-add') }}" class="btn btn-success btn-sm pull-right">Beceri Ekle</a>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th width="100">Fotoğraf</th>
                                                    <th>Adı</th>
                                                    <th>Kategori</th>
                                                    <th width="50">url</th>
                                                    <th width="150"></th>
                                                    <th width="100"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ( $portfolios as $portfolio)
                                                    <tr>
                                                        <td><img src="{{ base_url($portfolio->img_path."/".$portfolio->small_img_url) }}" height="100" width="100"></td>
                                                        <td>{{ $portfolio->name }}</td>
                                                        <td>{{ $portfolio->category_name }}</td>
                                                        <td><i class="fa {{ $portfolio->url != '' ? 'fa-check text-success' : 'fa-remove text-danger' }} fa-2x"></i></td>
                                                        <td class="text-center">
                                                            <a href="{{ admin_url('/portfolio-edit/'.$portfolio->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Düzenle</a>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{ admin_url('/portfolio-delete/'.$portfolio->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Sil</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


@push('js')
    <script>
        $().DataTable();
    </script>
@endpush
