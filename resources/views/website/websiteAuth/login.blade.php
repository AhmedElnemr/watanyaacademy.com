@extends('website.layouts.layout')

@section('page_title')
    تسجيل الدخول
@endsection


@section('content')



    <section class="LogIn">
        <!-- <div class="logo">
          <div class="logoBG">
            <a href="index.html"> <img src="img/logo.png"> </a>
          </div>
        </div> -->

        <div class="container formContainer">
            <div class=" user signInBx">
                <div class=" imgBox"> <img src=" {{ asset('website') }}/img/s2.jpg"></div>
                <div class="formBox">
                    <form action="{{url('login')}}" method="post">
                        @csrf
                        <h3>
                            تسجيل الدخول
                        </h3>
                        <input name="email" type="email" placeholder="الايميل" required>
                        <input name="password" type="password" placeholder="كلمة المرور" required>
                        <button class=" btn BG1" type="submit"> دخول </button>
                        <p class="signUp">ليس لديك حساب ؟ <a href="#" onclick="toggleForm();"> إنشاء حساب </a></p>
                    </form>
                </div>
            </div>
            <div class=" user signUpBx">
                <div class="formBox" style="overflow: scroll">

                    <div>



                        <ul class="nav nav-tabs " id="myTabMD" role="tablist">


                            {{-- ==================== student ====================== --}}
                            <li class="nav-item">
                                <a class="nav-link active" id="student-tab-md" data-toggle="tab" href="#student-md" role="tab"
                                   aria-controls="student-md" aria-selected="true"> <i class="fas fa-user-graduate mx-2"></i> طالب</a>
                            </li>


                            {{-- ==================== father ====================== --}}
                            <li class="nav-item">
                                <a class="nav-link" id="father-tab-md" data-toggle="tab" href="#father-md" role="tab"
                                   aria-controls="father-md" aria-selected="false"><i class="fas fa-male mx-2"></i> ولي آمر</a>
                            </li>


                            {{-- ==================== teacher ====================== --}}
                            <li class="nav-item">
                                <a class="nav-link" id="teacher-tab-md" data-toggle="tab" href="#teacher-md" role="tab"
                                   aria-controls="teacher-md" aria-selected="false"><i class="fas fa-male mx-2"></i> مدرس </a>
                            </li>


                        </ul>


                        <div class="tab-content" id="myTabContentMD">


                            {{-- ==================== student ====================== --}}
                                @include('website.websiteAuth.inc.student')


                            {{-- ==================== father ====================== --}}
                                @include('website.websiteAuth.inc.parent')


                            {{-- ==================== teacher ====================== --}}
                                @include('website.websiteAuth.inc.teacher')



                        </div>



                    </div>



                </div>
                <div class=" imgBox imgBox2 "> <img src=" {{ asset('website') }}/img/s4.jpg" alt=""></div>

            </div>
        </div>
    </section>

    <script type="text/javascript">
        function toggleForm() {
            var change = document.querySelector('.formContainer');
            change.classList.toggle('active')
        }
    </script>


@endsection





@push('web_js')
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/js/select2.min.js"></script>--}}

    <script type="text/javascript">

        // $('.dt_select2').select2();

        $(document).ready(function() {


            //====================================================================
            $(document).on('change', '.Get-class-and-teachers', function(){
                var stage_id = $(this).val();

                // change department destroy
                $('.ajax_departments_data').html( '<option value="" disabled selected> اختر الصف اولا </option>' );
                $('.ajax_subjects_data').html( '<option value="" disabled selected> اختر الصف او القسم اولا </option>' );

                var url = '{{ url('Get-class-teacher') }}'+'/'+stage_id;
                console.log( url );
                $.ajax({
                    url:url,
                    dataType:'json',
                    type:'get',
                    // data:{'department_id':department_id},
                    beforeSend: function(){

                    },success: function(data){


                        // classes
                        if(data.status.status_class == 0)
                        {
                            $('.ajax_classes_data').html( '<option value="" disabled selected> لا يتوفر صفوف للمرحلة </option>' );
                        }else
                        {
                            data_classes = '<option value="" disabled selected>اختر</option>' + data.html.classes;
                            $('.ajax_classes_data').html( data_classes );
                        }


                        // teachers
                        if( data.status.status_teacher  == 0)
                        {
                            $('.ajax_teachers_data').html( '<option value="" disabled selected>  لا يتوفر مدرسين للمرحلة </option>' );

                        }else{
                            data_teachers = '<option value="" disabled selected>اختر</option>' + data.html.teachers;
                            $('.ajax_teachers_data').html( data_teachers );
                        }



                    },error(response){
                        console.log( response )
                    }

                });
                return false;
            });
            //====================================================================


            //====================================================================
            $(document).on('change', '.Get-departments', function(){
                var class_id = $(this).val();

                var url = '{{ url('Get-departments') }}'+'/'+class_id;
                // console.log( url );
                $.ajax({
                    url:url,
                    dataType:'json',
                    type:'get',
                    // data:{'department_id':department_id},
                    beforeSend: function(){

                    },success: function(data){

                        // console.log( data);
                        // departments
                        if(data.status.status_departments == 0)
                        {
                            $('.ajax_departments_data').html( '<option value="" disabled selected> لا يتوفر اقسام للصف </option>' );
                            $('.add_attr').removeAttr("required");
                        }else
                        {
                            data_departments = '<option value="" disabled selected>اختر</option>' + data.html.departments;
                            $('.ajax_departments_data').html( data_departments );
                            $('.add_attr').attr("required", "true");
                        }


                    },error(response){
                        console.log( response )
                    }

                });
                return false;
            });
            //====================================================================

            //====================================================================
            $(document).on('change', '.Get-subjects-by-class-or-department', function(){


                var data_val_type = $(this).attr('data-val-type');

                //Get-class-and-teachers
                //ajax_teachers_data
                //Get-departments

                var  stage_id = '';
                var  class_id = '';
                var  department_id = '';
                var url_query = '';

                if ( data_val_type == 'class')
                {
                    var stage_id = $('.Get-class-and-teachers').val();
                    var class_id = $(this).val();
                    url_query = '?stage_id='+stage_id+'&class_id='+class_id;
                }else
                {
                    var stage_id      = $('.Get-class-and-teachers').val();
                    var class_id      = $('.class_ajax_id').val();
                    var department_id = $(this).val();
                    url_query = '?stage_id='+stage_id+'&class_id='+class_id+'&department_id='+department_id;
                }


                var url = '{{ url('Get-subjects-by-class-or-department') }}'+url_query;

                console.log( url );

                $.ajax({
                    url:url,
                    dataType:'json',
                    type:'get',
                    // data:{'department_id':department_id},
                    beforeSend: function(){

                    },success: function(data){

                        console.log( data);
                        // departments

                        if(data.status.status_subjects == 0)
                        {
                            $('.ajax_subjects_data').html( '<option value="" disabled selected> لا يتوفر مواد </option>' );
                        }else
                        {
                            data_subjectss = '<option value="" disabled selected>اختر</option>' + data.html.subjects;
                            $('.ajax_subjects_data').html( data_subjectss );
                        }


                    },error(response){
                        console.log( response )
                    }

                });

                return false;
            });
            //====================================================================

        });
    </script>

@endpush




