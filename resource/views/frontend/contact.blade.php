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
                                <span>{{ $data->adress }}</span>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <i class="icon-mail-3"></i>
                                <span><a href="mailto:{{ $data->email }}"><small>{{ $data->email }}</small></a></span>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <i class="icon-mobile"></i>
                                <span>{{ $data->phone }}</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="form">
                    <div class="left">
                        <div class="fields">
                            <form action="{{ base_url('iletisim') }}" method="post">
                                @if(isset($_GET['success']) && $_GET['success'] == 'true')
                                <div style="color: green;">
                                    Mesajınız başarıyla gönderildi!
                                </div>
                                @endif
                                <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                                <div class="first">
                                    <ul>
                                        <li>
                                            <input id="name" type="text" placeholder="Name"
                                                autocomplete="off" name="name_surname">
                                        </li>
                                        <li>
                                            <input id="email" type="text" placeholder="Email"
                                                autocomplete="off" name="email">
                                        </li>
                                    </ul>
                                </div>
                                <div class="last">
                                    <textarea id="message" placeholder="Message" name="message"></textarea>
                                </div>
                                <div class="cavani_tm_button">
                                    <button id="send_message" type="submit">Send Message</button>
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