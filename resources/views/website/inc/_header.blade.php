<!--HEADER SECTION-->
<section>
    <!-- TOP BAR -->
    <div class="ed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ed-com-t1-left">
                        <ul>
                            <li><a href="#">للتواصل :{{ setting() ? setting()->address1 : '#' }}</a>
                            </li>
                            <li><a href="#">الهاتف:{{ setting() ? setting()->phone1 : '#' }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-right">
                        <ul>
                            <li><a href="{{ url('contact_us') }}"> اتصل بنا </a>
                            </li>
                            <li><a href="{{ url('news') }}"> أخبارنا </a>
                            </li>
                        </ul>
                    </div>
                    <div class="ed-com-t1-social">
                        <ul>
                            <li><a target="_blank" href="{{ setting() ? setting()->facebook : '#' }}"><i
                                        class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li><a target="_blank" href="{{ setting() ? setting()->google_plus : '#' }}"><i
                                        class="fa fa-google-plus" aria-hidden="true"></i></a>
                            </li>
                            <li><a target="_blank" href="{{ setting() ? setting()->twitter : '#' }}"><i
                                        class="fa fa-twitter" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- LOGO AND MENU SECTION -->
    <div class="top-logo" data-spy="affix" data-offset-top="250">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wed-logo">

                        <a href="{{ url('/') }}">
                            <img  src="{{ setting() ? GetImg(setting()->image_slider) : asset('website')."//images/logo.png"}}" alt=""/>
                        </a>
                    </div>
                    <div class="search-form">
                        <form>
                            <div class="sf-type">
                                <div class="sf-input">
                                    <input type="text" id="sf-box" placeholder="ابحث عن الكورس أو النشاط الذى تريده">
                                </div>
                            </div>
                            <div class="sf-submit">
                                <input type="submit" value="بحث">
                            </div>
                        </form>
                    </div>

                </div>
                <div class="all-drop-down-menu">
                </div>

            </div>
        </div>
    </div>
    <div class="search-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-menu">
                        <ul>
                            <li><a href="{{ url('/') }}">الرئيسية</a>
                            </li>
                            <li class="about-menu">
                                <a href="#!" class="mm-arr">تعريف الاكاديمية</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="about-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm1-com mm1-s1">
                                                <ul>
                                                    <li><i class="fa fa-long-arrow-left"></i><a
                                                            href="{{ url('word-of-prestent')}}">كلمة رئيس الاكاديمية</a></li>
                                                    <li><i class="fa fa-long-arrow-left"></i><a
                                                            href="{{ url('site-text').'?key_word=vision' }}">رؤية
                                                            الاكاديمية</a></li>
                                                    <li><i class="fa fa-long-arrow-left"></i><a
                                                            href="{{ url('site-text').'?key_word=message' }}">رسالة
                                                            الاكاديمية</a></li>
                                                    <li><i class="fa fa-long-arrow-left"></i><a
                                                            href="{{ url('site-text').'?key_word=goals' }}">أهداف
                                                            الاكاديمية</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="admi-menu">
                                <a href="#" class="mm-arr">البرامج التعليمية</a>
                                <!-- MEGA MENU 1 -->
                                <div class="mm-pos">
                                    <div class="admi-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm2-com mm1-com mm1-s1">
                                                <ul>
                                                    @foreach( \App\Models\Level::all() as $level)
                                                        <li><i class="fa fa-long-arrow-left"></i><a
                                                                href="{{ url('courses-by-level').'/'.$level->id }}"> {{ $level->title }} </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ url('team_work') }}">أعضاء هيئة التدريس</a></li>
                            <li>
                                <a href="{{ url('courses') }}" class="mm-arr">كورسات ودورات</a>
                            </li>
                            <li><a href="{{ url('how_to_study') }}">طريقة الدراسة بالاكاديمية</a>
                            </li>
                            <li><a href="{{ url('how_to_subscribe') }}"> طريقة الالتحاق بالأكاديمية </a>
                            </li>
                            <li class="cour-menu">
                                <a href="#!" class="mm-arr">الأنشطة</a>
                                <div class="mm-pos">
                                    <div class="cour-mm m-menu">
                                        <div class="m-menu-inn">
                                            <div class="mm1-com mm1-s1">
                                                <ul>
                                                    @foreach( \App\Models\ActivityDepartment::all() as $activity)
                                                        <li><i class="fa fa-long-arrow-left"></i><a
                                                                href="{{ url('activities-by-activity-department').'/'.$activity->id }}"> {{ $activity->title }} </a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{ url('news') }}">أخبارنا</a>
                            </li>
                            <li><a href="{{ url('contact_us') }}">اتصل بنا</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--END HEADER SECTION-->

