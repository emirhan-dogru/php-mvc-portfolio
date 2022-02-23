@extends('frontend.layout.app')

@section('content')

<div class="cavani_tm_section animated fadeInUp">
        <div class="section_inner">
            <div class="cavani_tm_contact">
                <div class="cavani_tm_title">
                    <span>Get in Touch</span>
                </div>
                <div class="short_info">
                    <ul>
                        <li>
                            <div class="list_inner">
                                <i class="icon-location"></i>
                                <span>Ave Street, New York, USA</span>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <i class="icon-mail-3"></i>
                                <span><a href="#"><span class="__cf_email__"
                                            data-cfemail="fb939e979794bb989a8d9a9592d5989496">[email&#160;protected]</span></a></span>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <i class="icon-mobile"></i>
                                <span>+77 022 444 05 05</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="form">
                    <div class="left">
                        <div class="fields">
                            <form action="https://marketifythemes.net/" method="post" class="contact_form"
                                id="contact_form">
                                <div class="returnmessage"
                                    data-success="Your message has been received, We will contact you soon.">
                                </div>
                                <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                <div class="first">
                                    <ul>
                                        <li>
                                            <input id="name" type="text" placeholder="Name"
                                                autocomplete="off">
                                        </li>
                                        <li>
                                            <input id="email" type="text" placeholder="Email"
                                                autocomplete="off">
                                        </li>
                                    </ul>
                                </div>
                                <div class="last">
                                    <textarea id="message" placeholder="Message"></textarea>
                                </div>
                                <div class="cavani_tm_button">
                                    <a id="send_message" href="#">Send Message</a>
                                </div>

                            </form>
                        </div>
                    </div>
                    <div class="right">
                        <div class="map_wrap">
                            <div class="map" id="ieatmaps"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection