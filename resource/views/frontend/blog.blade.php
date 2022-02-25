@extends('frontend.layout.app')

@section('content')

<div class="cavani_tm_section animated fadeInUp">
        <div class="section_inner">
            <div class="cavani_tm_news">
                <div class="cavani_tm_title">
                    <span>Latest News</span>
                </div>
                <div class="news_list">
                    <ul>
                        @foreach(App\Models\Blogs::orderBy('created_at','desc')->get() as $blog)
                        <li>
                            <div class="list_inner">
                                <div class="image">
                                    <img src="{{ base_url($blog->img_path."/".$blog->small_img_url) }}" alt="" />
                                    <div class="main" data-img-url="{{ base_url($blog->img_path."/".$blog->img_url) }}"></div>
                                    <a class="cavani_tm_full_link" href="#"></a>
                                </div>
                                <div class="details">
                                    <div class="metabox">
                                        <div class="info">
                                            <span class="category"><a href="#">E.dogru</a></span>
                                            <span class="date">{{ format_date($blog->created_at , 'd F Y' ) }}</span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">{{ $blog->name }}</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="news_hidden_details">
                                    <div class="news_popup_informations">
                                        <div class="text">
                                            <p>{!! $blog->content !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection