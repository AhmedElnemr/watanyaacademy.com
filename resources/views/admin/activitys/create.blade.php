@extends('admin.index')

<?php
$title = 'اضافه نشاط جديد';
$home_title    =  trans('admin.main_name' )  . ' | ' . $title ;
$first_title   = ["title"=>' الانشطة', "url"=> aurl('activity') ];
$secind_title  = ["title"=>$title , "url"=> aurl('activity/create') ];
?>

@section('page_title')
    {{ $home_title }}
@endsection

@section('page-links')
    @include('admin.inc.__title')
@endsection


@section('content')


    <div class="box">

        <div class="box-header">
            <h3 class="box-title">{{ $home_title }}</h3>
        </div>
        <hr><br>
        <!-- /.box-header -->

        {!! Form::open( ['route' => 'activity.store',  'method' => 'POST','files'=>true] ) !!}



        <div class="row">

            <div class="form-group col-md-6">
                {!! Form::label('title', ' العنوان ' ) !!}
                {!! Form::text('title', old('title') ,['class'=>'form-control']) !!}
            </div>


            <div class="form-group col-md-6">
                {!! Form::label('activity_department_id', 'قسم النشاط' ) !!}
                {!! Form::select('activity_department_id', App\Models\ActivityDepartment::pluck('title','id'), old('activity_department_id') ,
                            ['class'=>'form-control selectpicker m-input title',
                            'data-live-search'=>'true', 'data-validation'=>'required',
                            'aria-required'=>'true', 'placeholder'=> 'اختر' ]) !!}
            </div>



            <div class="form-group col-md-12">
                {!! Form::label('main_image', 'الصورة الرئيسية') !!}
                <input type="file" name="main_image" id="input-file-now-custom-1" class="dropify"
                       data-default-file="">
            </div>



            <div class="form-group col-md-12">
                {!! Form::label('contents', 'المحتوى' ) !!}
                {!! Form::textarea('contents', old('contents') ,['class'=>'form-control']) !!}
            </div>




            <div class="form-group m-form__group col-xl-12 col-lg-12 contentPreviewImg quote-imgs-thumbs quote-imgs-thumb">

                <h3 class="text-center">صور الانشطة</h3>
                <hr><br>


                <input class="show-for-sr " type="file" id="upload_imgs" name="images[]" multiple />

                <div class="row upload_btn">

                    <div class="col-md-3">
                        <label class="btn btn-info" for="upload_imgs"> <span>تحميل</span><i class="fas fa-cloud-upload-alt "></i></label>
                    </div>

                </div>



                <div class="quote-imgs-thumbs quote-imgs-thumb " id="img_preview" aria-live="polite">
                    {{-- view images --}}
                </div>



            </div>



        </div>



        {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}



    </div>
    <!-- /.box-body -->



@endsection



@push('js')

    <script !src="">

        var imgUpload = document.getElementById('upload_imgs')
            , imgPreview = document.getElementById('img_preview')
            , imgUploadForm = document.getElementById('img-upload-form')
            , totalFiles
            , previewTitle
            , previewTitleText
            , img;

        imgUpload.addEventListener('change', previewImgs, false);
        imgUploadForm.addEventListener('submit', function (e) {
            e.preventDefault();
            alert('Images Uploaded! (not really, but it would if this was on your website)');
        }, false);

        function previewImgs(event) {

            $('.old_images').hide();

            totalFiles = imgUpload.files.length;

            if(!!totalFiles) {
                $('.remove_and_update').removeClass('remove_and_update');
            }

            for(var i = 0; i < totalFiles; i++) {
                parent_span = document.createElement('span');
                parent_span.classList.add('position-relative' );
                parent_span.classList.add('parent_'+ i );
                parent_span.classList.add('old_images');


                img = document.createElement('img');
                img.src = URL.createObjectURL(event.target.files[i]);
                img.classList.add('img-preview-thumb');


                child_span = document.createElement('span');
                child_span.classList.add('child_'+ i );
                // child_span.classList.add('xSpan');
                child_span.classList.add('delete_img');


                // previewTitle = document.createElement('p');
                // previewTitle.style.fontWeight = 'bold';
                // previewTitleText = document.createTextNode('x');
                // child_span.appendChild( previewTitleText );


                parent_span.appendChild( img );
                parent_span.appendChild( child_span );

                imgPreview.appendChild( parent_span );

            }


        }
    </script>



    <script !src="">

        // ----------------------- Delete  ------------------------------------
        {{--$(document).on('click', '.delete_img', function(){--}}

        {{--    var id = $(this).attr('id');--}}
        {{--    var url   = '{{ route('delete_img') }}';--}}

        {{--    $(this).parent().remove();--}}

        {{--    $.ajax({--}}

        {{--        url:url,--}}
        {{--        dataType:'json',--}}
        {{--        data:{  "_token": "{{ csrf_token() }}", 'id' : id },--}}
        {{--        type:'post',--}}

        {{--        beforeSend : function(){--}}

        {{--        },--}}
        {{--        success : function(data){--}}
        {{--            console.log( data );--}}

        {{--            toastr.warning(data.message, data.title, {"progressBar" : true} );--}}

        {{--        }--}}
        {{--        ,--}}
        {{--        error : function(data_error, exeption){--}}
        {{--            console.log( data_error.responseJSON )--}}
        {{--        }--}}


        {{--    }); //end ajax--}}

        {{--    return false;--}}

        {{--}); // end click--}}
        // ----------------------- Delete  ------------------------------------


        $(document).on('click', '.del_old_images', function(){
            $('.old_images').remove();
        });



    </script>



@endpush
