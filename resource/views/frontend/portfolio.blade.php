@extends('frontend.layout.app')

@section('content')
<div class="cavani_tm_section animated fadeInUp">
    <div class="section_inner">
        <div class="cavani_tm_portfolio">
            <div class="cavani_tm_title">
                <span>Creative Portfolio</span>
            </div>
            <div class="portfolio_filter">
                <ul>
                    <li><a href="#" class="current" data-filter="*">All</a></li>
                    @foreach (App\Models\Portfolio::groupBy('category_name')->get() as $portfolio)
                    <li><a href="#" data-filter=".{{ $portfolio->category_name }}">{{ $portfolio->category_name }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="portfolio_list">
                <ul class="gallery_zoom">
                    @foreach (App\Models\Portfolio::all() as $portfolio)
                    <li class="{{ $portfolio->category_name }}">
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{ base_url($portfolio->img_path."/".$portfolio->img_url) }}" alt="{{ $portfolio->name }}" width="388px" />
                                <div class="main" data-img-url="{{ base_url($portfolio->img_path."/".$portfolio->img_url) }}"></div>
                                <span class="icon"><i class="icon-doc-text-inv"></i></span>
                                <div class="details">
                                    <h3>{{ $portfolio->name }}</h3>
                                </div>
                                <a class="cavani_tm_full_link portfolio_popup" href="#"></a>
                            </div>
                            <div class="hidden_content">
                                <div class="popup_details">
                                    <div class="additional_images">
                                        <div class="cavani_tm_button">
                                            <a id="send_message"  href="{{  $portfolio->url != '' ? $portfolio->url : 'javascript:void(0)' }}" {{  $portfolio->url != '' ? 'target=_blank' : '' }}>
                                            {{  $portfolio->url != '' ? 'Projeyi Aç' : 'Bu projenin önizlemesi desteklenmiyor' }}
                                        </a>
                                        </div>
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