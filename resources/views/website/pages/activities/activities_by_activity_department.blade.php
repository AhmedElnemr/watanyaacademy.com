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
                    <h1>  انشطه {{ $ActivityDepartment->title }} </h1>
                    <div class="event-head-sub">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">الرئيسية</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> انشطه {{ $ActivityDepartment->title }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!--SECTION START-->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="cor about-sp">
                    <div class="ed-about-tit">
                        <div class="con-title">
                            <h2>أنشطة <span> الأكاديمية</span></h2>
                            <p>تقدم الاكاديمية العديد من الانشطة فى كافة المجالات كما تقدم ايضا العديد من الندوات والمؤتمرات وايضا الرسائل والمناقشات </p>
                        </div>
                        <div>
                            <div class="col-md-3">
                                <div class="sidebar sidebar-right mt-sm-30">
{{--                                    <div class="widget">--}}
{{--                                        <h5 class="widget-title line-bottom">بحث عن</h5>--}}
{{--                                        <div class="search-form">--}}
{{--                                            <form>--}}
{{--                                                <div class="input-group">--}}
{{--                                                    <input type="text" placeholder="ابحث عن" class="form-control search-input">--}}
{{--                                                    <span class="input-group-btn">--}}
{{--                      <button type="submit" class="btn search-button"><i class="fa fa-search"></i></button>--}}
{{--                      </span>--}}
{{--                                                </div>--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

                                    <div class="widget">
                                        <h5 class="widget-title line-bottom">جميع الانشطة</h5>
                                        <div class="categories">
                                            <ul class="list list-border angle-double-right">
                                                @foreach( \App\Models\ActivityDepartment::withCount('activity_departments_fk')->get() as $activity)
                                                    <li><i class="fa fa-angle-double-left"></i><a href="{{ url('activities-by-activity-department').'/'.$activity->id }}">{{ $activity->title }}<span>({{ $activity->activity_departments_fk_count }})</span></a></li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="col-md-9">
                                <div class="ho-event pg-eve-main">
                                    @foreach($Activities as $activity)
                                        <div class="upcoming-events bg-white-f3 mb-20">
                                            <div class="row">
                                                <div class="col-sm-4 pr-0 pr-sm-15">
                                                    <div class="thumb p-15">
                                                        <img class="img-fullwidth" src="{{ GetImg( $activity->main_image ) }}" alt="...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-0 pl-sm-15">
                                                    <div class="event-details p-15 mt-20">
                                                        <h4 class="media-heading text-uppercase font-weight-500">
                                                            {{ $activity->title }}
                                                        </h4>
                                                        <p>
                                                            {{ $activity->contents }}
                                                        </p>
                                                        <a href="{{ url('activity-detail').'/'.$activity->id }}" class="btn btn-flat btn-dark btn-theme-colored btn-sm">لمعرفة التفاصيل <i class="fa fa-angle-double-left"></i></a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <div class="event-count p-15 mt-15">
                                                        <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                                                            <li class=" mr-5 bg-lightest">{{ change_Date_into_arabic($activity->created_at , 'full') }}</li>
{{--                                                            <li class="p-15 pl-20 pr-20 mr-5 bg-lightest"> 31</li>--}}
{{--                                                            <li class="p-15 bg-lightest">2015</li>--}}
                                                        </ul>
                                                        <ul>
{{--                                                            <li class="mb-10 text-theme-colored"><i class="fa fa-clock-o mr-5"></i> من الساعة الخامسة : الساعة السابعة</li>--}}
{{--                                                            <li class="text-theme-colored"><i class="fa fa-map-marker mr-5"></i> القاهرة -التجمع الخامس.</li>--}}
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>

{{--                        <div class="pg-pagina">--}}
{{--                            <ul class="pagination">--}}
{{--                                <li class="disabled"><a href="#!"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>--}}
{{--                                <li class="active"><a href="#!">1</a></li>--}}
{{--                                <li class="waves-effect"><a href="#!">2</a></li>--}}
{{--                                <li class="waves-effect"><a href="#!">3</a></li>--}}
{{--                                <li class="waves-effect"><a href="#!">4</a></li>--}}
{{--                                <li class="waves-effect"><a href="#!">5</a></li>--}}
{{--                                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->



@endsection







