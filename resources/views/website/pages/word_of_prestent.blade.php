@extends('website.layouts.layout')

@section('page_title')
    {{ (isset($title))? $title:" الاكاديمية " }}
@endsection

@push('web_css')
    <style>
        .head-2 {
            background: url('{{ GetImg( banner( 'word_of_prestent' ) ? banner( 'word_of_prestent' )->background : asset('website').'/'.'images/pro-bg.jpg' ) }}');
        }

    </style>
@endpush

@section('content')

    <section>
        <div class="head-2">
            <div class="overlay"></div>
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1> {{ site_text( request()->get('word_of_prestent') ) ? site_text( request()->get('word_of_prestent') )->title : '' }} </h1>
                    <div class="event-head-sub">
                        <nav aria-label="breadcrumb"></nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-page">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-boss">
                        <img  src="{{GetImg( site_text('word_of_prestent') ? site_text('word_of_prestent')->logo :  asset('website').'/'.'academia/images/about2.jpg') }}" alt=""/>
                    </div>
                </div>
                <div class="word-boss">
                    <div class="col-md-6">
                        <h2 class="line-bottom mt-0 mb-10 mt-sm-30">كلمة رئيس <span class="">الاكاديمية</span></h2>
                        <p class="mb-30"> {{ site_text( 'word_of_prestent' ) ? site_text( 'word_of_prestent' )->contents : 'أكد أن المملكة حققت إنجازات غير مسبوقة في أقل من 4 سنوات فقطولي العهد: هدفنا التالي هو تحسين دخل المواطن الرياض - واس: رفع صاحب السمو الملكي الأمير محمد بن سلمان بن عبد العزيز آل سعود ولي العهد نائب رئيس مجلس الوزراء وزير الدفاع شكره لخادم الحرمين الشريفين الملك سلمان بن عبد العزيز آل سعود -أيده الله- لما تضمنته كلمته الضافية في مجلس الشورى، مؤكدا سموه أن المملكة استطاعت في فترة وجيزة وسريعة أن تحقق إنجازات غير مسبوقة في تاريخ المملكة المعاصر.' }}</p>
                    </div>
                </div>
            </div>
            <hr/>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-md-12">
                    <h4>فيديو توضيحى </h4>
                    <video controls onloadeddata="this.play();this.muted=false;" >
                        <source src="{{GetImg( site_text('word_of_prestent') ? site_text('word_of_prestent')->video :  asset('website').'/'.'academia/images/about2.jpg') }}"
                                type="video/mp4">
                    </video>
                </div>

            </div>

        </div>
    </section>

@endsection







