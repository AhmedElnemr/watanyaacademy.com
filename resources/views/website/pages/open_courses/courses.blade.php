@extends('website.layouts.layout')

@section('page_title')
    {{ (isset($title))? $title:" الاكاديمية " }}
@endsection

@push('web_css')
    <style>
        .head-2
        {
            background: url('{{ GetImg( banner('courses') ? banner('courses')->background : '' ) }}');
        }
    </style>
@endpush

@section('content')



    <section>
        <div class="head-2">
            <div class="overlay"></div>
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1> {{ banner('courses') ? banner('courses')->title : '' }} </h1>
                    <div class="event-head-sub">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ banner('courses') ? banner('courses')->title : '' }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- POPULAR COURSES -->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>أفضل <span>الكورسات</span></h2>
                    <p>تقدم الاكاديمية الوطنية للعلوم الشاملة لطلابها أفضل الكورسات فى جميع المجالات التى .</p>
                </div>
            </div>
            <div class="row">


                @foreach($courses as $key => $course)
                    <div class="home-top-cour col-md-6">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3">
                            <img src="{{ GetImg( $course->image) }}" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="{{ url('/') }}">
                                <h3>{{ $course->title }}</h3>
                            </a>
                            <p>
                                {{ $course->contents }}
                            </p>
                            <span class="home-top-cour-rat"> {{ $key+1 }} </span>
                            <div class="hom-list-info">
                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>عدد الساعات:<span> {{ $course->duration }} </span> </li>
                                    {{--                                    <li><i class="fa fa-user" aria-hidden="true"></i>المدرب:<span>محمد أحمد عبدالرحمن</span> </li>--}}
                                </ul>
                            </div>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="{{ url('course_details').'/'.$course->id }}">احجز الآن</a> </li>
{{--                                    <li><a href="{{ url('course_details').'/'.$course->id }}">لمعرفة المزيد</a> </li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>


@endsection







