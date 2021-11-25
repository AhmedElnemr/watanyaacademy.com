@extends('admin.index')

<?php
$home_title    =  trans('admin.main_name' )  . ' | ' . $title ;
$first_title   = ["title"=>'teams', "url"=> aurl('team') ];
$secind_title  = ["title"=>$title , "url"=> aurl('team/create') ];
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

        {!! Form::open( ['route' => 'team.store',  'method' => 'POST','files'=>true] ) !!}



        <div class="row">


            <div class="form-group col-md-6">
                {!! Form::label('name', ' الاسم *' ) !!}
                {!! Form::text('name', old('name') ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-md-6">
                {!! Form::label('position', 'المكانة ( position )  *' ) !!}
                {!! Form::text('position', old('position') ,['class'=>'form-control']) !!}
            </div>


            <div class="form-group col-md-6">
                {!! Form::label('face_book', 'facebook' ) !!}
                {!! Form::text('face_book', old('face_book') ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-md-6">
                {!! Form::label('twitter', 'twitter' ) !!}
                {!! Form::text('twitter', old('twitter') ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-md-6">
                {!! Form::label('instagram', 'instagram' ) !!}
                {!! Form::text('instagram', old('instagram') ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group col-md-6">
                {!! Form::label('linkedin', 'linkedin' ) !!}
                {!! Form::text('linkedin', old('linkedin') ,['class'=>'form-control']) !!}
            </div>



            <div class="form-group col-md-12">
                {!! Form::label('contents', ' نبذه عامة  *' ) !!}
                {!! Form::textarea('contents', old('contents') ,['class'=>'form-control']) !!}
            </div>


            <div class="form-group col-md-6">
                {!! Form::label('cv', 'cv PDF') !!}
                <input type="file" name="cv" id="input-file-now-custom-1" class="dropify"
                       data-default-file="">
                <span style="color: red">يجب ان تكون صيغة الملف PDF</span>
            </div>

            <div class="form-group col-md-6">
                {!! Form::label('image', 'الصورة الشخصية *') !!}
                <input type="file" name="image" id="input-file-now-custom-1" class="dropify"
                       data-default-file="">
            </div>

        </div>



        {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}



    </div>
    <!-- /.box-body -->



@endsection
