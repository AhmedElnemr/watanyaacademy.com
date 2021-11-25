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



    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="cor">
                    <div class="col-md-8">
                        <div class="cor-mid-img">
                            <img src="{{ GetImg( $course_details->image) }}" alt="">
                        </div>
                        <div class="cor-con-mid">


                            <div class="cor-p1">
                                <h2> {{ $course_details->title }} </h2>
                                <span>مدة الكورس : {{ $course_details->duration }}</span>
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
                                <h3>تفاصيل الكورس:</h3>
                                <p> {{ $course_details->contents }}</p>
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

                                        <input type="hidden" name="course_id" value="{{ $course_details->id }}">

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







