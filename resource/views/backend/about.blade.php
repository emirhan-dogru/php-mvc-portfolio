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
                    <form action="{{ admin_url('/about') }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Mevcut fotoğraf</label>
                            <div class="col-md-9 col-sm-9 ">
                                <img src="{{ base_url($user->img_path."/".$user->small_img_url) }}" width="100">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Fotoğraf yükle</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="file" class="form-control" placeholder="ad soyad giriniz" name="img">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Ad Soyad</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="ad soyad giriniz" name="name_surname" value="{{ $user->name_surname }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">E-mail</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="e-posta adresinizi giriniz" name="email" value="{{ $user->email }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Telefon numarası</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" placeholder="telefon numaranızı giriniz" name="phone" value="{{ $user->phone }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Doğum tarihi</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="date" class="form-control" name="birthdate" value="{{ $user->birthdate }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">İş</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="job" placeholder="yaptığınız iş" value="{{ $user->job }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Adress</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input type="text" class="form-control" name="adress" placeholder="adresiniz" value="{{ $user->adress }}">
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label class="control-label col-md-3 col-sm-3 ">Biografi</label>
                            <div class="col-md-9 col-sm-9 ">
                                <textarea name="bio" class="form-control" rows="5" placeholder="kısaca kendiniz tanıtın">{{ $user->bio }}</textarea>
                            </div>
                        </div>

                        <div class="control-group row">
                            <label class="control-label col-md-3 col-sm-3 ">Öne çıkan beceriler</label>
                            <div class="col-md-9 col-sm-9 ">
                                <input id="tags_1" type="text" class="tags form-control" value="{{ $user->short_skills }}" name="short_skills" />
                                <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 text-right">
                                <button type="submit" class="btn btn-success">Kaydet</button>
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