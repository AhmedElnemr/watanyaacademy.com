@extends('website.layouts.layout')

@section('page_title')
    {{ (isset($title))? $title:" الاكاديمية " }}
@endsection

@push('web_css')
    <style>
        .head-2
        {
            background: url('{{ GetImg( banner('contact_us') ? banner('contact_us')->background : '' ) }}');
        }
    </style>
@endpush

@section('content')



    <section>
        <div class="head-2">
            <div class="overlay"></div>
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1> {{ banner('contact_us') ? banner('contact_us')->title : '' }} </h1>
                    <div class="event-head-sub">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ banner('contact_us') ? banner('contact_us')->title : '' }}</li>
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
                <div class="cor about-sp">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="icon-box right media bg-deep p-30 mb-20">
                                    <a class="media-right pull-right" href="#">
                                        <i class="fa fa-info-circle text-theme-colored"></i></a>
                                    <div class="media-body"> <strong>الاكاديمية الوطنية للعلوم</strong>
                                        <p>تتضمن العديد من الكورسات والندوات والانشطة</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="icon-box right media bg-deep p-30 mb-20">
                                    <a class="media-right pull-right" href="#">
                                        <i class="fa fa-map-o text-theme-colored"></i>
                                    </a>
                                    <div class="media-body"> <strong>عنوان الاكاديمية الوطنية</strong>
                                        <p>القاهرة - مدينة نصر -شارع عباس العقاد</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="icon-box right media bg-deep p-30 mb-20">
                                    <a class="media-right pull-right" href="#">
                                        <i class="fa fa-phone text-theme-colored"></i></a>
                                    <div class="media-body">
                                        <strong>رقم هاتفنا للتواصل</strong>
                                        <p>+325 12345 65478</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-12">
                                <div class="icon-box right media bg-deep p-30 mb-20">
                                    <a class="media-right pull-right" href="#">
                                        <i class="fa fa-envelope-o text-theme-colored"></i>
                                    </a>
                                    <div class="media-body">
                                        <strong>البريد الالكترونى الخاص بنا</strong>
                                        <p>supporte@yourdomin.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <h3 class="line-bottom mt-0 mb-20"> {{ banner('contact_us') ? banner('contact_us')->title : '' }} </h3>

                        <form id="contact_form" name="contact_form"  action="{{ url('send_contact') }}" method="post">

                            @csrf

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input name="name" class="form-control" type="text" placeholder="اكتب اسمك" required="" aria-required="true" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input name="email" class="form-control required email" type="email" placeholder="اكتب بريدك الالكترونى" aria-required="true" required>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control required" rows="5" placeholder="ادخل رسالتك" aria-required="true" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <input name="form_botcheck" class="form-control" type="hidden" value="">
                                <button type="submit" class="btn btn-flat btn-theme-colored" data-loading-text="Please wait..."> ارسل الرسالة</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection







