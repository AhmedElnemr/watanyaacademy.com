
<!-- POPULAR COURSES -->
<section class="pop-cour">
    <div class="container com-sp pad-bot-70">
        <div class="row">
            <div class="con-title">
                <h2>أفضل <span>الكورسات</span></h2>
                <p>تقدم الاكاديمية الوطنية للعلوم الشاملة لطلابها أفضل الكورسات المتخصصه فى جميع المجالات التى يرغبون دراستها </p>
            </div>
        </div>
        <div class="row">


            @foreach($open_courses as $key => $open_course)
             <div class="home-top-cour col-md-6">
                        <!--POPULAR COURSES IMAGE-->
                        <div class="col-md-3">
                            <img src="{{ GetImg( $open_course->image) }}" alt=""> </div>
                        <!--POPULAR COURSES: CONTENT-->
                        <div class="col-md-9 home-top-cour-desc">
                            <a href="{{ url('course_details').'/'.$open_course->id }}">
                                <h3>{{ $open_course->title }}</h3>
                            </a>
                            <p>
                                {{   Str::limit($open_course->contents, 100)  }}
                            </p>
                            <span class="home-top-cour-rat"> {{ $key+1 }} </span>
                            <div class="hom-list-info">
                                <ul>
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i>عدد الساعات:<span> {{ $open_course->duration }} </span> </li>
{{--                                    <li><i class="fa fa-user" aria-hidden="true"></i>المدرب:<span>محمد أحمد عبدالرحمن</span> </li>--}}
                                </ul>
                            </div>
                            <div class="hom-list-share">
                                <ul>
                                    <li><a href="{{ url('course_details').'/'.$open_course->id }}">احجز الآن</a> </li>
{{--                                    <li><a href="{{ url('/') }}">لمعرفة المزيد</a> </li>--}}
                                </ul>
                            </div>
                        </div>
                    </div>
             @endforeach


        </div>
    </div>
</section>
