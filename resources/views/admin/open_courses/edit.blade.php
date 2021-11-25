@extends('admin.index')

<?php
$home_title    = trans('admin.main_name' ) . ' | ' . trans('admin.edit_', ['name_value'=> $open_course->title] );
$first_title   = ["title"=>'الكورسات المفتوحة' , "url"=> aurl('open_course') ];
$secind_title  = ["title"=> trans('admin.edit_', ['name_value'=> $open_course->title] ) , "url"=> '' ];
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
        <div class="box-body">
            {!! Form::open( ['route' => ['open_course.update', $open_course->id], 'method' => 'put', 'files'=>true]  ) !!}



            <div class="row">


                <div class="form-group col-md-6">
                    {!! Form::label('title', ' عنوان الكورس ' ) !!}
                    {!! Form::text('title', $open_course->title ,['class'=>'form-control', 'required']) !!}
                </div>



                <div class="form-group col-md-6">
                    {!! Form::label('duration', 'المدة ' ) !!}
                    {!! Form::text('duration', $open_course->duration ,['class'=>'form-control', 'required']) !!}
                </div>


                <div class="form-group col-md-12">
                    {!! Form::label('image', 'الصورة') !!}
                    <input type="file" name="image" id="input-file-now-custom-1" class="dropify"
                           data-default-file="{{ GetImg( $open_course->image ) }}">
                </div>

                <div class="form-group col-md-12">
                    {!! Form::label('contents', ' محتوى الكورس ' ) !!}
                    {!! Form::textarea('contents', $open_course->contents , ['class'=>'form-control']) !!}
                </div>



            </div>




            {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->


@endsection
