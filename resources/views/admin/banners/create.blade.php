@extends('admin.index')

<?php
$home_title    =  trans('admin.main_name' )  . ' | ' . $title ;
$first_title   = ["title"=>'البنرات', "url"=> aurl('banner') ];
$secind_title  = ["title"=>$title , "url"=> aurl('banner/create') ];
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

        {!! Form::open( ['route' => 'banner.store',  'method' => 'POST','files'=>true] ) !!}



        <div class="row">


            <div class="form-group col-md-4">
                {!! Form::label('key_word', 'الكلمة المفتاحية ( key_word )' ) !!}
                {!! Form::text('key_word', old('key_word') ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-md-4">
                {!! Form::label('url_name', ' url ' ) !!}
                {!! Form::text('url_name', old('url_name') ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-md-4">
                {!! Form::label('title', ' عنوان banner ' ) !!}
                {!! Form::text('title', old('title') ,['class'=>'form-control']) !!}
            </div>


            <div class="form-group col-md-12">
                {!! Form::label('background', 'الخلفية') !!}
                <input type="file" name="background" id="input-file-now-custom-1" class="dropify"
                       data-default-file="">
            </div>


{{--            <div class="form-group col-md-6">--}}
{{--                {!! Form::label('video', 'الفيديو') !!}--}}
{{--                <input type="file" name="video" id="input-file-now-custom-1" class="dropify"--}}
{{--                       data-default-file="">--}}
{{--            </div>--}}

            <div class="form-group col-md-12">
                {!! Form::label('contents', 'المحتوى' ) !!}
                {!! Form::textarea('contents',  old('contents') ,['class'=>'form-control']) !!}
            </div>



        </div>



        {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}



    </div>
    <!-- /.box-body -->



@endsection
