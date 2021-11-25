@extends('admin.index')

<?php
$home_title    = trans('admin.main_name' ) . ' | ' . trans('admin.edit_', ['name_value'=> $level->title] );
$first_title   = ["title"=>'المستويات' , "url"=> aurl('level') ];
$secind_title  = ["title"=> trans('admin.edit_', ['name_value'=> $level->title] ) , "url"=> '' ];
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
            {!! Form::open( ['route' => ['level.update', $level->id], 'method' => 'put', 'files'=>true]  ) !!}



            <div class="row">


                <div class="form-group col-md-6">
                    {!! Form::label('title', ' عنوان المستوى ' ) !!}
                    {!! Form::text('title', $level->title ,['class'=>'form-control']) !!}
                </div>


                <div class="form-group col-md-6">
                    {!! Form::label('price', 'السعر' ) !!}
                    {!! Form::number('price',  $level->price ,['class'=>'form-control']) !!}
                </div>


            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    {!! Form::label('image', 'الصورة') !!}
                    <input type="file" name="image" id="input-file-now-custom-1" class="dropify"
                           data-default-file="{{ GetImg( $level->image ) }}">
                </div>
            </div>




            {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->


@endsection
