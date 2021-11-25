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
                    <h1>  كورسات {{ $level->title }} </h1>
                    <div class="event-head-sub">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> كورسات {{ $level->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-page">
        <div class="container ">


            @foreach( $courses as $key => $course)

              @if($key % 2 == 0)
                <div class="row">
                    <div class="col-md-6">
                        <div class="about-text">

                            <h2>{{ $course->title }}</h2>
                            <p>
                                {{ $course->contents }}
                            </p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="photo">
                            <img style="width: 100%" src="{{ GetImg( $course->image ) }}" alt="image"/>
                        </div>
                    </div>
                </div>
              @else
                <div class="row">

                    <div class="col-md-6">
                        <div class="photo">
                            <img style="width: 100%" src="{{ GetImg( $course->image ) }}" alt="image"/>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="about-text">

                            <h2>{{ $course->title }}</h2>
                            <p>
                                {{ $course->contents }}
                            </p>

                        </div>
                    </div>
                </div>
              @endif
                  <hr/>
            @endforeach





        </div>
    </section>


@endsection







