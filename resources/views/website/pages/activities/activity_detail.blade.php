@extends('website.layouts.layout')

@section('page_title')
    {{ (isset($title))? $title:" الاكاديمية " }}
@endsection

@push('web_css')
    <style>
        .head-2
        {
            background: url('{{ GetImg( banner('activities') ? banner('activities')->background : '' ) }}');
        }
    </style>
@endpush

@section('content')



    <section>
        <div class="head-2">
            <div class="overlay"></div>
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1>   {{ $activity->title }} </h1>
                    <div class="event-head-sub">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item"><a href="{{ url('activities-by-activity-department').'/'.$activity->activity_department_fk->id }}"> {{ $activity->activity_department_fk->title }}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">  {{ $activity->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="cor">

                    <div class="col-md-8">

                        <div class="cor-mid-img">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">

                                    @foreach($activity->images_fk as $key => $image)
                                        <div class="item slider1 {{ $key == 0 ? 'active' : '' }}">
                                            <img src="{{ GetImg( $image->image ) }}" alt="">
                                        </div>
                                    @endforeach

                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <i class="fa fa-chevron-left slider-arr"></i>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next" style="right: -45px">
                                    <i class="fa fa-chevron-right slider-arr"></i>
                                </a>
                            </div>
                        </div>


                        <div class="cor-con-mid">
                            <div class="cor-p1">
                                <h2>{{ $activity->title }}</h2>
                                <div class="event-info">
                                    <ul>
                                        <li><i class="fa fa-calendar"></i>{{ change_Date_into_arabic($activity->created_at , 'full') }}</li>
{{--                                        <li><i class="fa fa-map-marker"></i> القاهرة - التجمع الخامس</li>--}}
                                    </ul>
                                </div>
                                <div class="share-btn">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook fb1"></i> شارك عبر الفيسبوك</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter tw1"></i> شارك عبر تويتر</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-instagram gp1"></i> شارك عبر انستجرام</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cor-p4">
                                <h3>تفاصيل النشاط:</h3>
                                <p>
                                    {{ $activity->contents }}
                                </p>
{{--                                <ul class="course-li">--}}
{{--                                    <li><i class="fa fa-arrow-left"></i>التسويق باستخدام فيس بوك</li>--}}
{{--                                    <li><i class="fa fa-arrow-left"></i>التسويق باستخدام انستجرام</li>--}}
{{--                                    <li><i class="fa fa-arrow-left"></i>التسويق باستخدام تويتر</li>--}}
{{--                                    <li><i class="fa fa-arrow-left"></i>التسويق باستخدام لينكد ان</li>--}}
{{--                                    <li><i class="fa fa-arrow-left"></i>التسويق باستخدام جوجل ادورد</li>--}}
{{--                                </ul>--}}
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4">
                        <div class="cor-side-com">
                            <div class="ho-ev-latest ho-ev-latest-bg-3">
                                <div class="ho-lat-ev">
                                    <h4>تسجيل الطلاب</h4>
                                    <p> يستطيع الطالب ان يقوم بالتسجيل فى هذا الكورس من هنا وذلك من خلال ملئ الداتا المطلوبة</p>
                                </div>
                            </div>
                            <div class="ho-st-login">
                                <div class="col s12">


                                    <form class="col s12" action="{{ url('register') }}" method="post">
                                        @csrf

                                        <input type="hidden" name="activity_id" value="{{ $activity->id }}">

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="student_name" type="text" class="validate" required>
                                                <label> اسم الطالب </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="qualification" type="text" class="validate" required>
                                                <label> المؤهل الدراسى </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="age" type="text" class="validate" required>
                                                <label> السن </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="address" type="text" class="validate" required>
                                                <label>العنوان </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="phone" type="text" class="validate" required>
                                                <label>رقم الهاتف </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input name="email" type="email" class="validate" required>
                                                <label>البريد الالكترونى </label>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" value="تسجيل" class="waves-effect waves-light light-btn">
                                            </div>
                                        </div>

                                    </form>



                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->



@endsection







