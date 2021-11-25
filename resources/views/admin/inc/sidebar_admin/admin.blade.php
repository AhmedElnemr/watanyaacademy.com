{{--<li class="m-menu__section ">
    <h4 class="m-menu__section-text" style="text-transform: none; font-size: 12px; color: #a1a4b5;"><i
            class="m-menu__link-icon flaticon-layer"></i> {{ trans('admin.setting') }} & {{ trans('admin.Site_text') }}
    </h4>
    <i class="m-menu__section-icon flaticon-more-v2"></i>
</li>--}}


{{--  -----------------------------------------   settings   -----------------------------------------    --}}


<li class="m-menu__item  m-menu__item--submenu {{ active_menu('settings')[0] }}" aria-haspopup="true"
    m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
        <i class="m-menu__link-icon flaticon-settings-1"></i><span
            class="m-menu__link-text"> {{ trans('admin.setting') }} </span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('settings') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-settings-1"><span></span></i><span
                        class="m-menu__link-text">  {{ trans('admin.setting') }}  </span></a>
            </li>


        </ul>
    </div>
</li>


{{--  -----------------------------------------   Admin_group   -----------------------------------------    --}}

{{--<li class="m-menu__item  m-menu__item--submenu {{ active_menu('permission_group')[0] }}" aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">--}}
{{--        <i class="m-menu__link-icon flaticon-users-1"></i><span class="m-menu__link-text">{{ trans('admin.permission_group') }}</span>--}}
{{--        <i class="m-menu__ver-arrow la la-angle-right"></i></a>--}}
{{--    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>--}}
{{--        <ul class="m-menu__subnav">--}}

{{--            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('permission_group') }}" class="m-menu__link ">--}}
{{--                    <i class="m-menu__link-icon flaticon-users-1"><span></span></i><span class="m-menu__link-text"> {{ trans('admin.permission_group') }}  </span></a>--}}
{{--            </li>--}}

{{--            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('permission_group/create') }}" class="m-menu__link ">--}}
{{--                    <i class="m-menu__link-icon flaticon-plus"><span></span></i><span class="m-menu__link-text">{{ trans('admin.add_new_permission') }} </span></a>--}}
{{--            </li>--}}


{{--        </ul>--}}
{{--    </div>--}}
{{--</li>--}}


{{--  -----------------------------------------   Admin   -----------------------------------------    --}}

<li class="m-menu__item  m-menu__item--submenu {{ active_menu('admin')[0] }}" aria-haspopup="true"
    m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
        <i class="m-menu__link-icon flaticon-users"></i><span class="m-menu__link-text"> المشرفين </span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('admin') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-users"><span></span></i><span class="m-menu__link-text"> المشرفين   </span></a>
            </li>

            <li class="m-menu__item " aria-haspopup="true">
                <a href="{{ aurl('admin/create') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-plus"><span></span></i><span
                        class="m-menu__link-text">{{ trans('admin.add_new_admin') }} </span></a>

                </a>
            </li>


        </ul>
    </div>
</li>


{{--
<li class="m-menu__section ">
    <h4 class="m-menu__section-text" style="text-transform: none; font-size: 12px; color: #a1a4b5;"><i
            class="m-menu__link-icon flaticon-star"></i> {{ trans('admin.Website_control') }}  </h4>
    <i class="m-menu__section-icon flaticon-more-v2"></i>
</li>
--}}


{{--  -----------------------------------------   site_text   -----------------------------------------    --}}


<li class="m-menu__item  m-menu__item--submenu {{ active_menu('site_text')[0] }}" aria-haspopup="true"
    m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
        <i class="m-menu__link-icon fa fa-home"></i><span class="m-menu__link-text">  نصوص الموقع </span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('site_text') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon la la-diamond"><span></span></i><span
                        class="m-menu__link-text"> الكل   </span></a>
            </li>

            @foreach( \App\Models\SiteText::all() as $banner)
                <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('site_text/'.$banner->id.'/edit') }}"
                                                                  class="m-menu__link ">
                        <i class="m-menu__link-icon la la-diamond"><span></span></i><span class="m-menu__link-text">
                           {{ $banner->title }}
                        </span></a>
                </li>
            @endforeach

        </ul>
    </div>
</li>


{{--  -----------------------------------------   banner   -----------------------------------------    --}}

<li class="m-menu__item  m-menu__item--submenu {{ active_menu('banner')[0] }}" aria-haspopup="true"
    m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
        <i class="m-menu__link-icon la la-desktop"></i><span class="m-menu__link-text"> خلفيات الصفحات </span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('banner') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon la la-diamond"><span></span></i><span
                        class="m-menu__link-text"> الكل   </span></a>
            </li>

            @foreach( \App\Models\Banner::all() as $banner)
                <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('banner/'.$banner->id.'/edit') }}"
                                                                  class="m-menu__link ">
                        <i class="m-menu__link-icon la la-diamond"><span></span></i><span class="m-menu__link-text">
                           {{ $banner->title }}
                        </span></a>
                </li>
            @endforeach

        </ul>
    </div>
</li>


{{--  -----------------------------------------   level   -----------------------------------------    --}}

<li class="m-menu__item  m-menu__item--submenu {{ active_menu('level')[0] }}" aria-haspopup="true"
    m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
        <i class="m-menu__link-icon fa fa-list"></i><span class="m-menu__link-text"> البرامج التعليمية </span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('level') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-list"><span></span></i><span
                        class="m-menu__link-text"> المستويات   </span></a>
            </li>

            <li class="m-menu__item " aria-haspopup="true">
                <a href="{{ aurl('level/create') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-plus"><span></span></i><span class="m-menu__link-text">اضافة مستوى جديد </span></a>

                </a>
            </li>

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('course').'?type=close' }}"
                                                              class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-mortar-board"><span></span></i><span class="m-menu__link-text"> البرامج التعليمية   </span></a>
            </li>

            <li class="m-menu__item " aria-haspopup="true">
                <a href="{{ aurl('course/create').'?type=close' }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-plus"><span></span></i><span class="m-menu__link-text">اضافة برنامج تعليمى </span></a>

                </a>
            </li>

        </ul>
    </div>
</li>





{{--  -----------------------------------------   open_course   -----------------------------------------    --}}

<li class="m-menu__item  m-menu__item--submenu {{ request()->get('type') == 'open' ? 'm-menu__item--open' : '' }}"
    aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
        <i class="m-menu__link-icon fa fa-mortar-board"></i><span class="m-menu__link-text"> الكورسات المفتوحة </span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('open_course').'?type=open' }}"
                                                              class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-mortar-board"><span></span></i><span class="m-menu__link-text"> الكورسات المفتوحة  </span></a>
            </li>

            <li class="m-menu__item " aria-haspopup="true">
                <a href="{{ aurl('open_course/create').'?type=open' }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-plus"><span></span></i><span class="m-menu__link-text">اضافة كورس مفتوح جديد </span></a>

                </a>
            </li>


        </ul>
    </div>
</li>


{{--  -----------------------------------------   team   -----------------------------------------    --}}

<li class="m-menu__item  m-menu__item--submenu {{ active_menu('team')[0] }}" aria-haspopup="true"
    m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
        <i class="m-menu__link-icon la la-users"></i><span class="m-menu__link-text"> أعضاء هيئة التدريس  </span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('team') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon la la-users"><span></span></i><span class="m-menu__link-text"> أعضاء هيئة التدريس   </span></a>
            </li>

            <li class="m-menu__item " aria-haspopup="true">
                <a href="{{ aurl('team/create') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-plus"><span></span></i><span class="m-menu__link-text">اضافة فريق او عضو جديد </span></a>

                </a>
            </li>


        </ul>
    </div>
</li>


{{--  -----------------------------------------   activity   -----------------------------------------    --}}

<li class="m-menu__item  m-menu__item--submenu  {{ Request::segment(2) == 'activity' ? 'm-menu__item--open' : '' }}"
    aria-haspopup="true" m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
        <i class="m-menu__link-icon fa fa-bar-chart"></i><span class="m-menu__link-text">  الانشطة  </span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">


            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('activity_department') }}"
                                                              class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-navicon"><span></span></i><span class="m-menu__link-text"> اقسام الانشطة   </span></a>
            </li>
            <li class="m-menu__item " aria-haspopup="true">
                <a href="{{ aurl('activity_department/create') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-plus"><span></span></i><span class="m-menu__link-text">اضافة قسم جديد للانشطه </span></a>

                </a>
            </li>
            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('activity') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-bar-chart"><span></span></i><span class="m-menu__link-text">  الانشطة   </span></a>
            </li>

            <li class="m-menu__item " aria-haspopup="true">
                <a href="{{ aurl('activity/create') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-plus"><span></span></i><span class="m-menu__link-text"> اضافة نشاط جديد </span></a>

                </a>
            </li>


        </ul>
    </div>
</li>


{{--  -----------------------------------------   new   -----------------------------------------    --}}

<li class="m-menu__item  m-menu__item--submenu {{ active_menu('new')[0] }}" aria-haspopup="true"
    m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
        <i class="m-menu__link-icon fa fa-file-archive"></i><span class="m-menu__link-text"> الاخبار  </span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('new') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-file-archive"><span></span></i><span class="m-menu__link-text"> الاخبار  </span></a>
            </li>

            <li class="m-menu__item " aria-haspopup="true">
                <a href="{{ aurl('new/create') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-plus"><span></span></i><span class="m-menu__link-text">اضافة خبر جديد </span></a>

                </a>
            </li>


        </ul>
    </div>
</li>


{{--  -----------------------------------------   client   -----------------------------------------    --}}

<li class="m-menu__item  m-menu__item--submenu {{ active_menu('client')[0] }}" aria-haspopup="true"
    m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
        <i class="m-menu__link-icon fa fa-users"></i><span class="m-menu__link-text"> عملاؤنا  </span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('client') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-users"><span></span></i><span
                        class="m-menu__link-text"> عملاؤنا   </span></a>
            </li>

            <li class="m-menu__item " aria-haspopup="true">
                <a href="{{ aurl('client/create') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-plus"><span></span></i><span class="m-menu__link-text">اضافة عميل جديد </span></a>

                </a>
            </li>


        </ul>
    </div>
</li>


{{--  -----------------------------------------   register   -----------------------------------------    --}}

<li class="m-menu__item  m-menu__item--submenu {{ active_menu('register')[0] }}" aria-haspopup="true"
    m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
        <i class="m-menu__link-icon fa fa-audio-description"></i><span class="m-menu__link-text"> طلبات التسجيل   </span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('register').'?type=all' }}"
                                                              class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-audio-description"><span></span></i><span
                        class="m-menu__link-text">  كل الطلبات   </span></a>
            </li>

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('register').'?type=course' }}"
                                                              class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-audio-description"><span></span></i><span
                        class="m-menu__link-text"> طلبات التسجيل بالكورسات  </span></a>
            </li>

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('register').'?type=activity' }}"
                                                              class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa-audio-description"><span></span></i><span
                        class="m-menu__link-text">  طلبات التسجيل بالانشطه   </span></a>
            </li>


        </ul>
    </div>
</li>


{{--  -----------------------------------------   contact   -----------------------------------------    --}}

<li class="m-menu__item  m-menu__item--submenu {{ active_menu('contact')[0] }}" aria-haspopup="true"
    m-menu-submenu-toggle="hover"><a href="javascript:;" class="m-menu__link m-menu__toggle">
        <i class="m-menu__link-icon fa fa-phone"></i><span class="m-menu__link-text"> تواصل معنا </span>
        <i class="m-menu__ver-arrow la la-angle-right"></i></a>
    <div class="m-menu__submenu "><span class="m-menu__arrow"></span>
        <ul class="m-menu__subnav">

            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('contact') }}"
                                                              class="m-menu__link ">
                    <i class="m-menu__link-icon fa fa fa-phone"><span></span></i><span
                        class="m-menu__link-text"> تواصل معنا </span></a>
            </li>


        </ul>
    </div>
</li>

