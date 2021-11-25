@extends('website.layouts.layout')

@section('page_title')
    {{ (isset($title))? $title:" الاكاديمية " }}
@endsection

@push('web_css')
    <style>

    </style>
@endpush

@section('content')


    <!--SECTION START-->
    <section class="c-all h-quote">
        <div class="container">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="all-title quote-title qu-new">
                    <h2>التسجيل بالاكاديمية</h2>
                    <p>يمكنك الآن التسجيل فى الاكاديمية الوطنية للعلوم الشاملة نرجو أن نكون دائما عند حسن ظنكم وأن نوفر لكم كل ماتحتاجوه ونتمنى الدعم وان تكونوا دائما على تواصل معنا</p>
                    <p>اذا كنت ترغب بالتسجيل فى اى من فروع الاكاديمية يرجى ملئ الاستمارة بكافة البيانات  جميع البيانات ضرورية وهامة للغاية</p>
                    <p class="help-line"> رقم الهاتف <span>{{ setting() ? setting()->phone1 : '#' }}</span> </p> <span class="help-arrow pulse"><i class="fa fa-angle-left" aria-hidden="true"></i></span> </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    <div class="col s12">


                        <form class="form-horizontal" action="{{ url('register') }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label class="control-label ">الاسم بالكامل:</label>
                                <div class="">
                                    <input name="student_name" type="text" class="form-control" placeholder="ادخل اسمك" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">المؤهل الدراسى:</label>
                                <div class="">
                                    <input name="qualification" type="text" class="form-control" placeholder="ادخل المؤهل الدراسى" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label">السن:</label>
                                <div class="">
                                    <input name="age" type="number" class="form-control" placeholder="ادخل السن" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label">العنوان:</label>
                                <div class="">
                                    <input name="address" type="text" class="form-control" placeholder="ادخل العنوان" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label ">رقم الهاتف:</label>
                                <div class="">
                                    <input name="phone" type="number" class="form-control" placeholder="ادخل رقم الهاتف" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label ">البريد الالكترونى:</label>
                                <div class="">
                                    <input name="email" type="email" class="form-control" placeholder="ادخل البريد" required>
                                </div>
                            </div>




                            <div class="form-group mar-bot-0">
                                <div class="col-sm-offset-2 col-sm-8">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper" style="">
                                        <input type="submit" value="سجل الآن" class="waves-button-input"></i>
                                </div>
                            </div>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->


@endsection







