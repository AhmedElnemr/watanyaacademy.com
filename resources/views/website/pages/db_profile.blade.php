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
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-4">
                    <div class="pro-user">
                        <img src="{{ GetImg($our_team->image) }}" alt="user">
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li>
                                <h4>{{ $our_team->name }}</h4>
                            </li>
                            <li>{{ $our_team->position }}</li>
                            {{--<li><span>رقم الهاتف : </span> {{ $our_team->position }}</li>--}}
                            {{--<li><span>أيام العمل : </span> السبت - الاربعاء</li>--}}
                        </ul>
                        <ul class="social">
                            <li><a href="{{ $our_team->face_book }}"><i class="fa fa-facebook"></i> </a></li>
                            <li><a href="{{ $our_team->twitter }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $our_team->instagram }}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ $our_team->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="udb">

                        <div class="udb-sec udb-prof">
                            <h4>{{--<img src="images/icon/db1.png" alt="" />--}} الملف الشخصى</h4>
                            <p>{{ $our_team->contents }}</p>
                            {{-- <ul>
                                <li> <i class="fa fa-angle-double-left"></i>بدأ شغفي بالمبيعات والتسويق عبر الإنترنت في وقت مبكر</li>
                                <li><i class="fa fa-angle-double-left"></i>بدأ شغفي بالمبيعات والتسويق عبر الإنترنت في وقت مبكر </li>
                                <li><i class="fa fa-angle-double-left"></i>بدأ شغفي بالمبيعات والتسويق عبر الإنترنت في وقت مبكر</li>
                                <li><i class="fa fa-angle-double-left"></i>بدأ شغفي بالمبيعات والتسويق عبر الإنترنت في وقت مبكر</li>
                                <li><i class="fa fa-angle-double-left"></i>بدأ شغفي بالمبيعات والتسويق عبر الإنترنت في وقت مبكر</li>
                            </ul>
                            <hr/>
                            {{GetImg(  $our_team->cv ) }}
                            <div class="sdb-tabl-com sdb-pro-table">
                                <div class="team-detail-box">
                                    <table class="calender responsive">
                                        <tbody><tr class="f">
                                            <th scope="col">رقم التسلسل</th>
                                            <th scope="col"> اسم الكورس</th>
                                            <th scope="col">الفئة</th>
                                            <th scope="col">سعر الكورس</th>
                                            <th scope="col">مواعيد الكورس</th>
                                        </tr>
                                        <tr>
                                            <td class="s">1</td>
                                            <td class="s1">Downloading &amp; Uploading</td>
                                            <td class="s1">NET</td>
                                            <td class="s1">$70.00</td>
                                            <td class="s1">6.00 Am to 11.00 AM </td>
                                        </tr>
                                        <tr>
                                            <td class="s">2</td>
                                            <td class="s1">Learn JavaScript/Ajax</td>
                                            <td class="s1">DEVELOPMENT</td>
                                            <td class="s1">$110.00</td>
                                            <td class="s1">3.00 PM to 8.00 PM </td>
                                        </tr>
                                        <tr>
                                            <td class="s">3</td>
                                            <td class="s1">Mailing &amp; Entertainment</td>
                                            <td class="s1">GAMES</td>
                                            <td class="s1">$90.00</td>
                                            <td class="s1">1.00 PM to 7.00 PM </td>
                                        </tr>
                                        <tr>
                                            <td class="s">4</td>
                                            <td class="s1">PHP Web Development</td>
                                            <td class="s1">PHP</td>
                                            <td class="s1">$80.00</td>
                                            <td class="s1">12.00 Am to 4.00 PM </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="sdb-bot-edit">

                                </div>
                            </div>--}}

                            <object data="{{GetImg(  $our_team->cv ) }}" type="application/pdf" width="100%" height="1000px">
                                <embed src="{{GetImg(  $our_team->cv ) }}" type="application/pdf" />
                            </object>

                            {{-- <object data="{{GetImg(  $our_team->cv ) }}" type="application/pdf">
                                 <iframe width="100%" src="https://docs.google.com/viewer?url={{GetImg(  $our_team->cv ) }}&embedded=true"></iframe>
                             </object>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
