<div class="ed-mob-menu">
    <div class="ed-mob-menu-con">
        <div class="ed-mm-left">
            <div class="wed-logo">
                <a href="{{ url('/') }}"><img src="{{asset('website')}}/images/logo.png" alt="" />
                </a>
            </div>
        </div>
        <div class="ed-mm-right">
            <div class="ed-mm-menu">
                <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                <div class="ed-mm-inn">
                    <a href="#" class="ed-mi-close"><i class="fa fa-times"></i></a>
                    <li><a href="{{ url('/') }}">الرئيسية</a></li>
                    <li><a href="#!">تعريف الاكاديمية</a>
                        <ul>
                            <li><i class="fa fa-long-arrow-left"></i><a
                                    href="{{ url('site-text').'?key_word=vision' }}">رؤية
                                    الاكاديمية</a></li>
                            <li><i class="fa fa-long-arrow-left"></i><a
                                    href="{{ url('site-text').'?key_word=message' }}">رسالة
                                    الاكاديمية</a></li>
                            <li><i class="fa fa-long-arrow-left"></i><a
                                    href="{{ url('site-text').'?key_word=goals' }}">أهداف
                                    الاكاديمية</a></li>
                            <li><i class="fa fa-long-arrow-left"></i><a
                                    href="{{ url('word-of-prestent')}}">كلمة رئيس الاكاديمية</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#!">البرامج التعليمية</a>
                        <ul>
                            @foreach( \App\Models\Level::all() as $level)
                                <li><i class="fa fa-long-arrow-left"></i><a
                                        href="{{ url('courses-by-level').'/'.$level->id }}"> {{ $level->title }} </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{ url('team_work') }}">أعضاء هيئة التدريس</a></li>
                    <li>
                        <a href="{{ url('courses') }}" class="mm-arr">كورسات ودورات</a>
                    </li>
                    <li>
                        <a href="{{ url('how_to_study') }}">طريقة الدراسة بالاكاديمية</a>
                    </li>
                    <li>
                        <a href="{{ url('how_to_subscribe') }}"> طريقة الالتحاق بالأكاديمية </a>
                    </li>
                    <li>
                        <a href="#!"> الانشطة </a>
                    </li>
                    <ul>
                        @foreach( \App\Models\ActivityDepartment::all() as $activity)
                            <li><i class="fa fa-long-arrow-left"></i><a
                                    href="{{ url('activities-by-activity-department').'/'.$activity->id }}"> {{ $activity->title }} </a>
                            </li>
                        @endforeach
                    </ul>
                    <li> <a href="{{ url('news') }}">أخبارنا</a></li>
                    <li><a href="{{ url('contact_us') }}">اتصل بنا</a></li>
                </div>
            </div>
        </div>
    </div>
</div>
