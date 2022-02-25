@extends('frontend.layout.app')

@section('content')
<div class="cavani_tm_section animated fadeInUp">
    <div class="section_inner">
        <div class="cavani_tm_about">
            <div class="biography">
                <div class="cavani_tm_title">
                    <span>About Me</span>
                </div>
                <div class="wrapper">
                    <div class="left">
                        {{ $data->bio }}
                    </div>
                    <div class="right">
                        <ul>
                            <li><span class="first">Name:</span><span class="second">{{ $data->name_surname }}</span>
                            </li>
                            <li><span class="first">Address:</span><span class="second">{{ $data->adress }}</span></li>
                            <li><span class="first">Birthdate:</span class="second">{{ $data->birthdate }}</span></li>
                            <li><span class="first">Job:</span><span class="second">{{ $data->job }}</span></li>
                            <li><span class="first">Mail:</span><span class="second">
                                <a href="mailto:{{ $data->email }}">
                                    <span>{{ $data->email }}</span>
                                </a>
                                </span>
                            </li>
                            <li><span class="first">Phone:</span><span class="second">
                                <a href="tel:{{ $data->phone }}">
                                    {{ $data->phone }}
                                </a>
                            </span>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="services">
                <div class="wrapper">
                    <div class="service_list">
                        <div class="cavani_tm_title">
                            <span>Services</span>
                        </div>
                        <div class="list">
                            <ul>
                                @foreach (App\Models\Skills::where('key' , 'services')->orderBy('id' , 'ASC')->get() as $skill)
                                <li><i class="icon-right-dir"></i>{{ $skill->value }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="interests">
                        <div class="cavani_tm_title">
                            <span>Interests</span>
                        </div>
                        <div class="list">
                            <ul>
                                @foreach (App\Models\Skills::where('key' , 'interests')->orderBy('id' , 'ASC')->get() as $skill)
                                <li><i class="icon-right-dir"></i>{{ $skill->value }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="skills">
                <div class="wrapper">
                    <div class="programming">
                        <div class="cavani_tm_title">
                            <span>Programming</span>
                        </div>
                        <div class="cavani_progress">
                            @foreach (App\Models\Skills::where('key' , 'programming')->orderBy('id' , 'ASC')->get() as $skill)
                            <div class="progress_inner" data-value="{{ $skill->progress }}">
                                <span><span class="label">{{ $skill->value }}</span><span
                                        class="number">{{ $skill->progress }}%</span></span>
                                <div class="background">
                                    <div class="bar">
                                        <div class="bar_in"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="language">
                        <div class="cavani_tm_title">
                            <span>Language</span>
                        </div>
                        <div class="circular_progress_bar">
                            <ul>
                                @foreach (App\Models\Skills::where('key' , 'language')->orderBy('id' , 'ASC')->get() as $skill)
                                <li>
                                    <div class="list_inner">
                                        @if ($skill->progress == 100)
                                        <div class="myCircle" data-value="1"></div>
                                        @else
                                        @php ($skill->progress = $skill->progress / 100);
                                        <div class="myCircle" data-value="{{ $skill->progress }}"></div>
                                        @endif
                                        <div class="title"><span>{{ $skill->value }}</span></div>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection