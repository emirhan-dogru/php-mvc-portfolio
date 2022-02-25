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
                    <form action="{{ admin_url('/settings') }}" method="POST" class="form-horizontal form-label-left">



                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Ad Soyad</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="name_surname" value="{{ $settings->name_surname }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">E-mail</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="email" value="{{ $settings->email }}">
                                <span>Bu mail adresini panele girmek için kullanılır</span>
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Parola Değiştir</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Parola Değiştir (onayla)</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="password" class="form-control" name="passwordTwo">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Websitenin adı</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="title" value="{{ $settings->website_title }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Website açıklaması</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="description"  value="{{ $settings->website_description }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Website anahtar kelimeleri</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="keywords"  value="{{ $settings->website_keywords }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">website kurucusu</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="author"  value="{{ $settings->website_author }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Facebook adresi</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="facebook"  value="{{ $settings->facebook }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Twitter adresi</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="twitter"  value="{{ $settings->twitter }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">İnstagram adresi</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="instagram"  value="{{ $settings->instagram }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Kişisel internet sitesi</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="website"  value="{{ $settings->website }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Github adresi</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="github"  value="{{ $settings->github }}">
                            </div>
                        </div>

                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 text-right">
                                <button type="submit" class="btn btn-outline-primary">Kaydet</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        
    </div>
@endsection


@push('js')
	<!-- jQuery Tags Input -->
	<script src="assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
@endpush