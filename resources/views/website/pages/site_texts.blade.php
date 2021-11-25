@extends('website.layouts.layout')

@section('page_title')
    {{ (isset($title))? $title:" الاكاديمية " }}
@endsection

@push('web_css')
    <style>
        .head-2 {
            background: url('{{ GetImg( banner( request()->get('key_word') ) ? banner( request()->get('key_word') )->background : asset('website').'/'.'images/pro-bg.jpg' ) }}');
        }
    </style>
@endpush

@section('content')



    <section>
        <div class="head-2">
            <div class="overlay"></div>
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1> {{ site_text( request()->get('key_word') ) ? site_text( request()->get('key_word') )->title : '' }} </h1>
                    <div class="event-head-sub">
                        <nav aria-label="breadcrumb">
                           {{-- <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item active"
                                    aria-current="page">{{ site_text( request()->get('key_word') ) ? site_text( request()->get('key_word') )->title : '' }}</li>
                            </ol>--}}
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-page">
        <div class="container ">
            <div class="row">

                <div class="col-md-8">
                    <div class="about-text">

                        <h2> {{ site_text( request()->get('key_word') ) ? site_text( request()->get('key_word') )->title : '' }} </h2>
                        <p>
                            {{ site_text( request()->get('key_word') ) ? site_text( request()->get('key_word') )->contents : '' }}
                        </p>

                    </div>
                    <div class="about-info-more">
                        <img src="{{GetImg( site_text(request()->get('key_word')) ? site_text(request()->get('key_word'))->logo :  asset('website').'/'.'academia/images/about2.jpg') }}" alt="">
                       {{-- <div class="info-more">
                            <p> <q>الرِّيادةُ في التعليم الشرعي الافتراضي المفتوح بأحدث الطرق والوسائل المقترن بالبث الفضائي على قناة زاد وشبكة الإنترنت.
                                    والسعي لتقريب العلم الصحيح من خلال صياغة .الرِّيادةُ في التعليم الشرعي الافتراضي المفتوح بأحدث الطرق والوسائل المقترن بالبث الفضائي على قناة زاد وشبكة الإنترنت.
                                    والسعي لتقريب العلم الصحيح من خلال صياغة .
                                </q></p>
                            <h4> كلمة رئيس الاكاديمية الوطنية للعلوم الشاملة </h4>
                            <a href="#" class="bann-btn-1">سجل الآن </a>

                        </div>--}}

                    </div>
                   {{-- <br><br>
                    <hr>

                     @if(site_text( request()->get('key_word') )->video != null)
                    <div class="col-md-12">
                        <h3> فيديو
                            توضيحى {{ site_text( request()->get('key_word') ) ? site_text( request()->get('key_word') )->title : '' }}</h3>
                        <br>
                        <iframe width="100%" height="250"
                                src="{{ GetImg( site_text( request()->get('key_word') ) ? site_text( request()->get('key_word') )->video : '' ) }}"
                                frameborder="0" allowfullscreen></iframe>
                    </div>
                    @endif--}}

                </div>


                <div class="col-md-4">


                    <div class="about-detail-col">
                        <h4>{{ site_text('vision') ? site_text('vision')->title : '' }}</h4>
                        <p>
                            {{ \Illuminate\Support\Str::limit( site_text('vision') ? site_text('vision')->contents : '', 140, '...')  }}
                        </p>
                        <a href="{{  url('site-text').'?key_word='.site_text('vision')->key_word  }}"
                           class="bann-btn-1">لمعرفة المزيد </a>
                    </div>


                    <div class="about-detail-col">
                        <h4>{{ site_text('how_to_study') ? site_text('how_to_study')->title : '' }}</h4>
                        <p>
                            {{ \Illuminate\Support\Str::limit( site_text('how_to_study') ? site_text('how_to_study')->contents : '', 140, '...')  }}
                        </p>
                        <a href="{{  url('site-text').'?key_word='.site_text('how_to_study')->key_word  }}"
                           class="bann-btn-1">لمعرفة المزيد </a>
                    </div>


                    <div class="about-detail-col">
                        <h4>{{ site_text('how_to_subscribe') ? site_text('how_to_subscribe')->title : '' }}</h4>
                        <p>
                            {{ \Illuminate\Support\Str::limit( site_text('how_to_subscribe') ? site_text('how_to_subscribe')->contents : '', 140, '...')  }}
                        </p>
                        <a href="{{  url('site-text').'?key_word='.site_text('how_to_subscribe')->key_word }}"
                           class="bann-btn-1">لمعرفة المزيد </a>
                    </div>


                </div>

            </div>
        </div>
    </section>




@endsection







