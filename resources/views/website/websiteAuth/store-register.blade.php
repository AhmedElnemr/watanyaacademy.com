@extends('website.layouts.layout')
@section('page_title')
    {{ $title }}
@endsection

@section('styles')
    <style>
        .loader2 {
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.632);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999999999;
        }

        .spinner {
            margin: 100px auto;
            width: 50px;
            height: 40px;
            text-align: center;
            font-size: 10px;
        }

        .spinner > div {
            background-color: rgb(255, 196, 0);
            height: 100%;
            width: 6px;
            display: inline-block;

            -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
            animation: sk-stretchdelay 1.2s infinite ease-in-out;
        }

        .spinner .rect2 {
            -webkit-animation-delay: -1.1s;
            animation-delay: -1.1s;
        }

        .spinner .rect3 {
            -webkit-animation-delay: -1.0s;
            animation-delay: -1.0s;
        }

        .spinner .rect4 {
            -webkit-animation-delay: -0.9s;
            animation-delay: -0.9s;
        }

        .spinner .rect5 {
            -webkit-animation-delay: -0.8s;
            animation-delay: -0.8s;
        }

        @-webkit-keyframes sk-stretchdelay {
            0%, 40%, 100% { -webkit-transform: scaleY(0.4) }
            20% { -webkit-transform: scaleY(1.0) }
        }

        @keyframes sk-stretchdelay {
            0%, 40%, 100% {
                transform: scaleY(0.4);
                -webkit-transform: scaleY(0.4);
            }  20% {
                   transform: scaleY(1.0);
                   -webkit-transform: scaleY(1.0);
               }
        }
    </style>
@endsection
{{-------------------- start content --------------------}}
@section('content')

    <div class="page-section mb-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-xs-12 col-lg-12 mb-30">
                    <!-- Form -->
                    <form id="vendorRegister" method="post" action="{{route('registerStoreAction')}}" class="form-horizontal checkout shop-checkout" enctype="multipart/form-data">
                        @csrf
                    <div class="login-form">
                        <h4 class="login-title">{{__('web_lang.Vendor Admin Info')}}</h4>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-20">
                                <label>{{__('web_lang.First Name')}}</label>
                                <input data-validation="required" name="first_name" value="{{ old('first_name') }}" class="mb-0" type="text" placeholder="First Name">
                            </div>
                            <div class="col-md-6 col-12 mb-20">
                                <label>{{__('web_lang.Last Name')}}</label>
                                <input data-validation="required" name="last_name" value="{{ old('last_name') }}" class="mb-0" type="text" placeholder="Last Name">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>{{__('web_lang.Email Address')}}*</label>
                                <input data-validation="required" name="email" value="{{ old('email') }}" class="mb-0" type="email" placeholder="Email Address">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>{{__('web_lang.Password')}}</label>
                                <input data-validation="required" name="password" class="mb-0" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-6 mb-20">
                                <label>{{__('web_lang.Confirm Password')}}</label>
                                <input data-validation="required" name="password_confirmation" class="mb-0" type="password" placeholder="Confirm Password">
                            </div>


                        </div>
                        {{----}}
                        <h4 class="login-title">{{__('web_lang.Vendor Info')}}</h4>
                        <div class="row">
                            <div class="col-md-6 col-12 mb-20">
                                <label>{{__('web_lang.Vendor Name(Arabic)')}}</label>
                                <input data-validation="required" name="vendor_name_ar" value="{{ old('vendor_name_ar') }}" class="mb-0" type="text" placeholder="">
                            </div>
                            <div class="col-md-6 col-12 mb-20">
                                <label>{{__('web_lang.Vendor Name(English)')}}</label>
                                <input data-validation="required" name="vendor_name_en" value="{{ old('vendor_name_en') }}" class="mb-0" type="text" placeholder="">
                            </div>
                            <div class="col-md-12 mb-20">
                                <label>{{__('web_lang.Vendor Email')}}*</label>
                                <input data-validation="required" name="vendor_email" value="{{ old('vendor_email') }}" class="mb-0" type="email" placeholder="">
                            </div>

                            <div class="col-md-6 col-12 mb-20">
                                <label>{{__('web_lang.Vendor Description(Arabic)')}}</label>
                                <textarea data-validation="required" name="vendor_details_ar" class="mb-0" type="text" placeholder="">{{ old('vendor_details_ar') }}</textarea>
                            </div>
                            <div class="col-md-6 col-12 mb-20">
                                <label>{{__('web_lang.Vendor Description(English)')}}</label>
                                <textarea data-validation="required" name="vendor_details_en" class="mb-0" type="text" placeholder="">{{ old('vendor_details_en') }}</textarea>
                            </div>

                            <div class="col-md-6 col-12 mb-20">
                                <input data-validation="required" name="terms_and_condition" type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">{{__('web_lang.You Must Accept Our Terms And Conditions')}}</label>

                            </div>

                            <div class="col-12">
                                <button  type="submit" class="register-button mt-0">{{__('web_lang.Register')}}</button>
                            </div>
                        </div>


                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="loader2" style="display:none;">
        <div class="spinner">
            <div class="rect1"></div>
            <div class="rect2"></div>
            <div class="rect3"></div>
            <div class="rect4"></div>
            <div class="rect5"></div>
        </div>
    </div>
@endsection


@push('js_for_me')
    <script src="{{asset('store/validation/jquery.form-validator.js')}}"></script>

    <script>
        $.validate({

        });
    </script>

    <script>

        $("form#vendorRegister").submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#vendorRegister').attr('action');
            $.ajax({
                url:url,
                type: 'POST',
                data: formData,
                beforeSend: function(){
                    $(".loader2 ").fadeIn();

                },
                complete: function(){
                    $(".loader2 ").fadeOut("slow");

                },
                success: function (data) {
                    $(".loader2 ").fadeOut("slow");
                    $('#vendorRegister')[0].reset();
                    toastr.success("{{__('web_lang.Your Account Has Created Successfully')}}","{{__('web_lang.Success')}}", {"positionClass":"toast-top-right", "progressBar" : true});
                    window.setTimeout(function() {
                        window.location.href='{{url('/')}}';
                    }, 1000);

                },
                error: function (data) {
                    if (data.status === 500) {
                        $(".loader2 ").fadeOut("slow");

                        toastr.error(data.message,"{{__('web_lang.Error')}}", {"positionClass":"toast-top-right", "progressBar" : true})

                    }
                    if (data.status === 422) {
                        $(".loader2 ").fadeOut("slow");
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error(value,"{{__('web_lang.Error')}}", {"positionClass":"toast-top-right", "progressBar" : true})
                                });

                            } else {
                                toastr.error(value,"{{__('web_lang.Error')}}", {"positionClass":"toast-top-right", "progressBar" : true})

                            }
                        });
                    }
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });
    </script>

@endpush


