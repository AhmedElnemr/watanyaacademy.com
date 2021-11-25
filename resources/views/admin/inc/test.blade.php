@extends('admin.index')

<?php
$home_title    =  trans('admin.main_name' )  . ' | ' . $title ;
$first_title   = ["title"=>'purchases', "url"=> aurl('purchase') ];
$secind_title  = ["title"=>$title , "url"=> aurl('purchase/create') ];
?>

@section('page_title')
    {{ $home_title }}
@endsection

@section('page-links')
    @include('admin.inc.__title')
@endsection


@push('css')
    <style>
        .preview-images-zone {
            width: 100%;
            border: 1px solid #ddd;
            min-height: 180px;
            /* display: flex; */
            padding: 5px 5px 0px 5px;
            position: relative;
            overflow:auto;
        }
        .preview-images-zone > .preview-image:first-child {
            height: 185px;
            width: 185px;
            position: relative;
            margin-right: 5px;
        }
        .preview-images-zone > .preview-image {
            height: 90px;
            width: 90px;
            position: relative;
            margin-right: 5px;
            float: left;
            margin-bottom: 5px;
        }
        .preview-images-zone > .preview-image > .image-zone {
            width: 100%;
            height: 100%;
        }
        .preview-images-zone > .preview-image > .image-zone > img {
            width: 100%;
            height: 100%;
        }
        .preview-images-zone > .preview-image > .tools-edit-image {
            position: absolute;
            z-index: 100;
            color: #fff;
            bottom: 0;
            width: 100%;
            text-align: center;
            margin-bottom: 10px;
            display: none;
        }
        .preview-images-zone > .preview-image > .image-cancel {
            font-size: 18px;
            position: absolute;
            top: 0;
            right: 0;
            font-weight: bold;
            margin-right: 10px;
            cursor: pointer;
            display: none;
            z-index: 100;
        }
        .preview-image:hover > .image-zone {
            cursor: move;
            opacity: .5;
        }
        .preview-image:hover > .tools-edit-image,
        .preview-image:hover > .image-cancel {
            display: block;
        }
        .ui-sortable-helper {
            width: 90px !important;
            height: 90px !important;
        }

        .container {
            padding-top: 50px;
        }
    </style>
@endpush


@push('js')
    <script !src="">
        $(document).ready(function() {
            document.getElementById('pro-image').addEventListener('change', readImage, false);


            $( ".preview-images-zone" ).sortable();

            $(document).on('click', '.image-cancel', function() {
                let no = $(this).data('no');
                console.log( no );
                // $("#pro-image").val('');
                // files[no] = undefined;
                // $("#pro-image").get(0).files[no] = '';
                console.log( $("#pro-image").get(0).files[no] );
                $(".preview-image.preview-show-"+no).remove();
            });
        });



        var num = 4;
        function readImage() {

            for (let i = 0; i < this.files.length; i++) {
                var file = this.files[i];

                console.log( file );
            }

            // console.log( this.files );

            if (window.File && window.FileList && window.FileReader) {
                var files = event.target.files; //FileList object
                var output = $(".preview-images-zone");

                for (let i = 0; i < files.length; i++) {
                    var file = files[i];
                    if (!file.type.match('image')) continue;

                    var picReader = new FileReader();

                    picReader.addEventListener('load', function (event) {
                        var picFile = event.target;
                        var html =  '<div class="preview-image preview-show-' + i + '">' +
                            '<div class="image-cancel" data-no="' + i + '">x</div>' +
                            '<div class="image-zone"><img id="pro-img-' + i + '" src="' + picFile.result + '"></div>' +
                            '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + i + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                            '</div>';

                        output.append(html);
                        num = num + 1;
                    });

                    picReader.readAsDataURL(file);
                }
                // $("#pro-image").val('');
            } else {
                console.log('Browser not support');
            }
        }


    </script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endpush



@section('content')


    <div class="box">

        <div class="box-header">
            <h3 class="box-title">{{ $home_title }}</h3>
        </div>
        <hr><br>
        <!-- /.box-header -->

        <div class="small-10 small-offset-1 medium-8 medium-offset-2 cell">

            {{--    {!! Form::open( ['route' => 'purchase.store',  'method' => 'POST','id'=>'img-upload-form' ,'files'=>true] ) !!}--}}
            {!! Form::open( ['route' => 'purchase.store',  'method' => 'POST'] ) !!}

            <div class="container">
                <fieldset class="form-group">
                    <a href="javascript:void(0)" onclick="$('#pro-image').click()">Upload Image</a>
                    {{--            <input type="file" id="pro-image" name="pro-image[]" style="display: none;" class="form-control" multiple>--}}
                    <input type="file"  name="pro-image[]"  class="form-control" id="pro-image" multiple>
                </fieldset>
                <div class="preview-images-zone">
                    {{--            <div class="preview-image preview-show-1">--}}
                    {{--                <div class="image-cancel" data-no="1">x</div>--}}
                    {{--                <div class="image-zone"><img id="pro-img-1" src="https://img.purch.com/w/660/aHR0cDovL3d3dy5saXZlc2NpZW5jZS5jb20vaW1hZ2VzL2kvMDAwLzA5Ny85NTkvb3JpZ2luYWwvc2h1dHRlcnN0b2NrXzYzOTcxNjY1LmpwZw=="></div>--}}
                    {{--                <div class="tools-edit-image"><a href="javascript:void(0)" data-no="1" class="btn btn-light btn-edit-image">edit</a></div>--}}
                    {{--            </div>--}}
                    {{--            <div class="preview-image preview-show-2">--}}
                    {{--                <div class="image-cancel" data-no="2">x</div>--}}
                    {{--                <div class="image-zone"><img id="pro-img-2" src="https://www.codeproject.com/KB/GDI-plus/ImageProcessing2/flip.jpg"></div>--}}
                    {{--                <div class="tools-edit-image"><a href="javascript:void(0)" data-no="2" class="btn btn-light btn-edit-image">edit</a></div>--}}
                    {{--            </div>--}}
                    {{--            <div class="preview-image preview-show-3">--}}
                    {{--                <div class="image-cancel" data-no="3">x</div>--}}
                    {{--                <div class="image-zone"><img id="pro-img-3" src="http://i.stack.imgur.com/WCveg.jpg"></div>--}}
                    {{--                <div class="tools-edit-image"><a href="javascript:void(0)" data-no="3" class="btn btn-light btn-edit-image">edit</a></div>--}}
                    {{--            </div>--}}
                </div>
            </div>

            {{--@push('js')--}}
            {{--          <script !src="">--}}
            {{--              $(document).ready(function(){--}}
            {{--                  alert('123');--}}
            {{--              });--}}
            {{--          </script>--}}
            {{--@endpush--}}


            {{--      <p>--}}
            {{--          <label for="upload_imgs" class="button hollow">Select Your Images +</label>--}}
            {{--          <input class="show-for-sr" type="file" id="upload_imgs" name="upload_imgs[]" multiple/>--}}
            {{--      </p>--}}



            {{--      <div class="quote-imgs-thumbs quote-imgs-thumbs--hidden" id="img_preview" aria-live="polite"></div>--}}







            {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}



        </div>
    </div>
    <!-- /.box-body -->



@endsection


















