@extends('website.layouts.layout')

@section('page_title')
    {{ (isset($title))? $title:" الاكاديمية " }}
@endsection

@push('web_css')
    <style>
        .head-2
        {
            background: url('{{ GetImg( banner('team_work') ? banner('team_work')->background : '' ) }}');
        }
    </style>
@endpush

@section('content')



    <section>
        <div class="head-2">
            <div class="overlay"></div>
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1> {{ banner('team_work') ? banner('team_work')->title : '' }} </h1>
                    <div class="event-head-sub">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ banner('team_work') ? banner('team_work')->title : '' }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>

        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>أعضاء هيئة  <span> التدريس </span></h2>
                    <p>يوجد بالأكاديمية العديد من المجالات المفيدة والتى يمكنك الاستفادة منها وسوف نتكلم عنها </p>
                </div>
            </div>

            @foreach($our_teams as $our_team)
                <div class="col-md-3">
                    <a href="{{ url('team-member').'/'.$our_team->id }}">
                    <figure class="snip1515">
                        <div class="profile-image"><img src="{{ GetImg($our_team->image) }}" alt="sample47" /></div>
                        <figcaption>
                            <h3><a href="">{{ $our_team->name }}</a></h3>
                            <h4>{{ $our_team->position }}</h4>
                            <p>{{ $our_team->contents }}</p>
                            <div class="icons"><a href="{{ $our_team->face_book }}"><i class="fa fa-facebook"></i></a>
                                <a href="{{ $our_team->twitter }}"> <i class="fa fa-twitter"></i></a>
                                <a href="{{ $our_team->instagram }}"> <i class="fa fa-instagram"></i></a>
                            </div>
                        </figcaption>
                    </figure>
                    </a>
                </div>
            @endforeach

        </div>

    </section>



@endsection







