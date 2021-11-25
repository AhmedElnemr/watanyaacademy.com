@extends('website.layouts.layout')

@section('page_title')
    {{ (isset($title))? $title:" الاكاديمية " }}
@endsection

@push('web_css')
    <style>
        .head-2
        {
            background: url('{{ GetImg( banner('news') ? banner('news')->background : '' ) }}');
        }
    </style>
@endpush

@section('content')



    <section>
        <div class="head-2">
            <div class="overlay"></div>
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1> {{ banner('news') ? banner('news')->title : '' }} </h1>
                    <div class="event-head-sub">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ banner('news') ? banner('news')->title : '' }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="news">
        <div class="container com-sp pad-bot-70">

            <div class="row">
                <div class="con-title">
                    <h2>تعرف على <span> اخبارنا </span></h2>
                    <p>يوجد بالأكاديمية العديد من العملاء المفيدين معنا والتى يمكنك الاستفادة منها وسوف نتكلم عنها </p>
                </div>
            </div>


                @foreach($news as $new)
                    <div class="col-md-4 item">
                        <figure class="snip1518">
                            <div class="image">
                                <img src="{{ GetImg( $new->image ) }}" alt="sample101" />
                            </div>
                            <figcaption>
                                <h3>{{ $new->title }}</h3>
                                <p>{{ $new->contents }}</p>

                                <footer>
                                    <div class="date"><i class="fa fa-calendar"></i> {{  change_Date_into_arabic($new->created_at , 'full') }} </div>
                                    {{--                                <div class="icons">--}}
                                    {{--                                    <div class="views"><i class="fa fa-eye"></i>2,907</div>--}}
                                    {{--                                    <div class="love"><i class="fa fa-heart"></i>623</div>--}}
                                    {{--                                </div>--}}
                                </footer>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                    </div>
                @endforeach


        </div>

    </section>




@endsection







