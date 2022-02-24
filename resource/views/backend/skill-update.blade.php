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
                    <form action="{{ admin_url("/skill-edit/$skill->id") }}" method="POST" class="form-horizontal form-label-left">

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Key (beceri adı)</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="key" value="{{ $skill->key }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Beceri</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="value" autocomplete="off" value="{{ $skill->value }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Progressbar</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="progress" autocomplete="off" value="{{ $skill->progress }}">
                                <span>eğer bu özelliği kullanmıycaksanız <strong>boş</strong> bırakın</span>
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