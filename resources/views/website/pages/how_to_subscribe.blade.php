@extends('website.layouts.layout')

@section('page_title')
    {{ (isset($title))? $title:" الاكاديمية " }}
@endsection

@push('web_css')
    <style>
        .head-2
        {
            background: url('{{ GetImg( banner('how_to_subscribe') ? banner('how_to_subscribe')->background : '' ) }}');
        }
    </style>
@endpush

@section('content')



    <section>
        <div class="head-2">
            <div class="overlay"></div>
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1> {{ banner('how_to_subscribe') ? banner('how_to_subscribe')->title : '' }} </h1>
                    <div class="event-head-sub">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ banner('how_to_subscribe') ? banner('how_to_subscribe')->title : '' }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="about-page">
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-text">

                        <h2>  {{ site_text('how_to_subscribe') ? site_text('how_to_subscribe')->title : '' }} </h2>
                        <p> {{ site_text('how_to_subscribe') ? site_text('how_to_subscribe')->contents : '' }} </p>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="photo">
                        <img style="width: 100%" src="{{ GetImg( site_text('how_to_subscribe') ? site_text('how_to_subscribe')->logo : '' ) }}" alt="image"/>
                    </div>
                </div>
            </div>

            <hr/>
        </div>
    </section>



    <!--SECTION END-->
    <section class="about-vedio">
        <div class="container pad-bot-70">
            <div class="row">
                <div class="col-md-12">
                    <h4>فيديو توضيحى لطريقة الدراسة بالاكاديمية</h4>
                    <iframe  width="1120" height="250" src="{{ GetImg( site_text('how_to_subscribe') ? site_text('how_to_subscribe')->video : '' ) }}" frameborder="0" allowfullscreen></iframe>
                </div>

            </div>

        </div>
    </section>




@endsection







