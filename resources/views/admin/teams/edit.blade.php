@extends('admin.index')

<?php
$home_title    = trans('admin.main_name' ) . ' | ' . trans('admin.edit_', ['name_value'=> $team->name] );
$first_title   = ["title"=>'teams' , "url"=> aurl('team') ];
$secind_title  = ["title"=> trans('admin.edit_', ['name_value'=> $team->title] ) , "url"=> '' ];
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
            {!! Form::open( ['route' => ['team.update', $team->id], 'method' => 'put', 'files'=>true]  ) !!}



            <div class="row">

                <div class="form-group col-md-6">
                    {!! Form::label('name', 'الاسم' ) !!}
                    {!! Form::text('name', $team->name ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('position', 'المكانة ( position )' ) !!}
                    {!! Form::text('position', $team->position ,['class'=>'form-control']) !!}
                </div>



                <div class="form-group col-md-6">
                    {!! Form::label('face_book', 'facebook' ) !!}
                    {!! Form::text('face_book', $team->face_book ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('twitter', 'twitter' ) !!}
                    {!! Form::text('twitter', $team->twitter ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('instagram', 'instagram' ) !!}
                    {!! Form::text('instagram', $team->instagram ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6">
                    {!! Form::label('linkedin', 'linkedin' ) !!}
                    {!! Form::text('linkedin', $team->linkedin ,['class'=>'form-control']) !!}
                </div>



                <div class="form-group col-md-12">
                    {!! Form::label('contents', ' نبذه عامة  ' ) !!}
                    {!! Form::textarea('contents', $team->contents ,['class'=>'form-control']) !!}
                </div>


                <div class="form-group col-md-6">
                    {!! Form::label('cv', 'cv PDF') !!}
                    <input type="file" name="cv" id="input-file-now-custom-1" class="dropify"
                           data-default-file="{{ GetImg( $team->cv ) }}">
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('image', 'الصورة الشخصية ') !!}
                    <input type="file" name="image" id="input-file-now-custom-1" class="dropify"
                           data-default-file="{{ GetImg( $team->image ) }}">
                </div>


            </div>




            {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->


@endsection
