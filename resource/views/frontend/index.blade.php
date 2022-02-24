@extends('frontend.layout.app')

@section('content')
<div id="preloader">
    <div class="loader_line"></div>
</div>

<div class="cavani_tm_section animated fadeInUp">
    <div class="cavani_tm_home">
        <div class="content">
            <h3 class="name">{{ $data->name_surname }}</h3>
            <span class="line"></span>
            <h3 class="job">
                <span class="cd-headline clip">
                    <span class="blc">Creative</span>
                    <span class="cd-words-wrapper">
                        @php
                         $short_skill = explode(',', $data->short_skills);   
                        @endphp
                        @foreach($short_skill as $key => $skill)
                        <b {{ $key == 0 ? 'class=is-visible' : '' }}>{{ $skill }}</b>
                        @endforeach
                        {{-- <b class="is-visible">Designer</b>
                        <b>Developer</b> --}}
                       
                    </span>
                </span>
            </h3>
            <div class="cavani_tm_button transition_link">
                <a href="{{ base_url('iletisim') }}">Get in Touch</a>
            </div>
        </div>
    </div>
</div>
@endsection