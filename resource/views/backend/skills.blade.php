@extends('backend.layout.app')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Becelerilerim</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right ">
                        <a href="{{ admin_url('/skill-add') }}" class="btn btn-success btn-sm pull-right">Beceri Ekle</a>
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
                                                    <th>Beceri Adı</th>
                                                    <th>İçerik</th>
                                                    <th>Progress</th>
                                                    <th width="150"></th>
                                                    <th width="100"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($skills as $skill)
                                                    <tr>
                                                        <td>{{ $skill->key }}</td>
                                                        <td>{{ $skill->value }}</td>
                                                            @if ($skill->progress == 0)
                                                            <td class="text-center"> 
                                                                <span class="text-center">-</span>
                                                            </td>
                                                            @else
                                                            <td>
                                                            <div class="progress progress-sm">
                                                                <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="{{ $skill->progress }}">%{{ $skill->progress }}</div>
                                                            </div>
                                                        </td>
                                                            @endif     
                                                        <td class="text-center">
                                                            <a href="{{ admin_url('/skill-edit/'.$skill->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Düzenle</a>
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{ admin_url('/skill-delete/'.$skill->id) }}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Sil</a>
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
