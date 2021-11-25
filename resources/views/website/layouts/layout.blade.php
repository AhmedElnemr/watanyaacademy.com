<!DOCTYPE html>
<html lang="en" dir="rtl">


<head>
    <title>الأكاديمية الوطنية للعلوم الشاملة</title>
    @include('website.inc._css')
    @yield('styles')
</head>

<body>



@include('website.inc._menu')
<!-- Header Area End Here -->



@include('website.inc._header')
<!-- Header Area End Here -->




    <!-- start content -->
    @yield('content')
    <!-- end content -->



@include('website.inc._footer')

@include('website.inc._js')


</body>

{{--@jquery--}}
@toastr_js
@toastr_render

</html>
