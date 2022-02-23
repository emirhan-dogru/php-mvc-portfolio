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
                    <li><a href="#" data-filter=".vimeo">Vimeo</a></li>
                    <li><a href="#" data-filter=".youtube">Youtube</a></li>
                    <li><a href="#" data-filter=".soundcloud">Soundcloud</a></li>
                    <li><a href="#" data-filter=".image">Image</a></li>
                    <li><a href="#" data-filter=".detail">Detail</a></li>
                </ul>
            </div>
            <div class="portfolio_list">
                <ul class="gallery_zoom">
                    <li class="youtube">
                        <div class="list_inner">
                            <div class="image">
                                <img src="assets/img/thumbs/1-1.jpg" alt="" />
                                <div class="main" data-img-url="assets/img/portfolio/1.jpg"></div>
                                <span class="icon"><i class="icon-youtube-play"></i></span>
                                <div class="details">
                                    <h3>Ave Brook</h3>
                                    <span>Youtube</span>
                                </div>
                                <a class="cavani_tm_full_link popup-youtube"
                                    href="https://www.youtube.com/watch?v=7e90gBu4pas"></a>
                            </div>
                        </div>
                    </li>
                    <li class="vimeo">
                        <div class="list_inner">
                            <div class="image">
                                <img src="assets/img/thumbs/1-1.jpg" alt="" />
                                <div class="main" data-img-url="assets/img/portfolio/2.jpg"></div>
                                <span class="icon"><i class="icon-vimeo-1"></i></span>
                                <div class="details">
                                    <h3>Kelly Hookin</h3>
                                    <span>Vimeo</span>
                                </div>
                                <a class="cavani_tm_full_link popup-vimeo"
                                    href="https://vimeo.com/337293658"></a>
                            </div>
                        </div>
                    </li>
                    <li class="soundcloud">
                        <div class="list_inner">
                            <div class="image">
                                <img src="assets/img/thumbs/1-1.jpg" alt="" />
                                <div class="main" data-img-url="assets/img/portfolio/3.jpg"></div>
                                <span class="icon"><i class="icon-soundcloud-1"></i></span>
                                <div class="details">
                                    <h3>Ashley Flores</h3>
                                    <span>Soundcloud</span>
                                </div>
                                <a class="cavani_tm_full_link soundcloude_link mfp-iframe audio"
                                    href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/471954807&amp;color=%23ff5500&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></a>
                            </div>
                        </div>
                    </li>
                    <li class="image">
                        <div class="list_inner">
                            <div class="image">
                                <img src="assets/img/thumbs/1-1.jpg" alt="" />
                                <div class="main" data-img-url="assets/img/portfolio/4.jpg"></div>
                                <span class="icon"><i class="icon-resize-full-alt"></i></span>
                                <div class="details">
                                    <h3>Alla Gorova</h3>
                                    <span>Image</span>
                                </div>
                                <a class="cavani_tm_full_link zoom" href="assets/img/portfolio/4.jpg"></a>
                            </div>
                        </div>
                    </li>
                    <li class="image">
                        <div class="list_inner">
                            <div class="image">
                                <img src="assets/img/thumbs/1-1.jpg" alt="" />
                                <div class="main" data-img-url="assets/img/portfolio/5.jpg"></div>
                                <span class="icon"><i class="icon-resize-full-alt"></i></span>
                                <div class="details">
                                    <h3>Fele Sweet</h3>
                                    <span>Image</span>
                                </div>
                                <a class="cavani_tm_full_link zoom" href="assets/img/portfolio/5.jpg"></a>
                            </div>
                        </div>
                    </li>
                    <li class="detail">
                        <div class="list_inner">
                            <div class="image">
                                <img src="assets/img/thumbs/1-1.jpg" alt="" />
                                <div class="main" data-img-url="assets/img/portfolio/6.jpg"></div>
                                <span class="icon"><i class="icon-doc-text-inv"></i></span>
                                <div class="details">
                                    <h3>Alice Moon</h3>
                                    <span>Detail</span>
                                </div>
                                <a class="cavani_tm_full_link portfolio_popup" href="#"></a>
                            </div>
                            <div class="hidden_content">
                                <div class="popup_details">
                                    <div class="main_details">
                                        <div class="textbox">
                                            <p>We live in a world where we need to move quickly and
                                                iterate on our ideas as flexibly as possible. Building
                                                mockups strikes the ideal balance ease of modification.
                                                Building mockups strikes the ideal balance ease of
                                                modification.</p>
                                            <p>Mockups are useful both for the creative phase of the
                                                project - for instance when you're trying to figure out
                                                your user flows or the proper visual hierarchy - and the
                                                production phase when they phase when they will
                                                represent the target product. Building mockups strikes
                                                the ideal balance ease of modification.</p>
                                        </div>
                                        <div class="detailbox">
                                            <ul>
                                                <li>
                                                    <span class="first">Client</span>
                                                    <span>Alvaro Morata</span>
                                                </li>
                                                <li>
                                                    <span class="first">Category</span>
                                                    <span><a href="#">Detail</a></span>
                                                </li>
                                                <li>
                                                    <span class="first">Date</span>
                                                    <span>March 07, 2021</span>
                                                </li>
                                                <li>
                                                    <span class="first">Share</span>
                                                    <ul class="share">
                                                        <li><a href="#"><img class="svg"
                                                                    src="assets/img/svg/social/facebook.svg"
                                                                    alt="" /></a></li>
                                                        <li><a href="#"><img class="svg"
                                                                    src="assets/img/svg/social/twitter.svg"
                                                                    alt="" /></a></li>
                                                        <li><a href="#"><img class="svg"
                                                                    src="assets/img/svg/social/instagram.svg"
                                                                    alt="" /></a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="additional_images">
                                        <ul>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="my_image">
                                                        <img src="assets/img/thumbs/4-2.jpg" alt="" />
                                                        <div class="main"
                                                            data-img-url="assets/img/portfolio/1.jpg"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="my_image">
                                                        <img src="assets/img/thumbs/4-2.jpg" alt="" />
                                                        <div class="main"
                                                            data-img-url="assets/img/portfolio/2.jpg"></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="list_inner">
                                                    <div class="my_image">
                                                        <img src="assets/img/thumbs/4-2.jpg" alt="" />
                                                        <div class="main"
                                                            data-img-url="assets/img/portfolio/3.jpg"></div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection