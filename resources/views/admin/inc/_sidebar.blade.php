<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn"><i class="la la-close"></i></button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">

    <!-- BEGIN: Aside Menu -->
    <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">


                @include('admin.inc.sidebar_admin.admin')


            <li class="m-menu__item " aria-haspopup="true"><a href="{{ aurl('logout') }}" class="m-menu__link ">
                    <i class="m-menu__link-icon flaticon-logout"><span></span></i><span class="m-menu__link-text"> {{ trans('admin.logout') }} </span></a>
            </li>




        </ul>
    </div>

    <!-- END: Aside Menu -->
</div>
