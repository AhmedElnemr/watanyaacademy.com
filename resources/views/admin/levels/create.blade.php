@extends('admin.index')

<?php
$home_title    =  trans('admin.main_name' )  . ' | ' . $title ;
$first_title   = ["title"=>'المستويات', "url"=> aurl('level') ];
$secind_title  = ["title"=>$title , "url"=> aurl('level/create') ];
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

        {!! Form::open( ['route' => 'level.store',  'method' => 'POST','files'=>true] ) !!}



        <div class="row">

            <div class="form-group col-md-6">
                {!! Form::label('title', ' عنوان المستوى ' ) !!}
                {!! Form::text('title', old('title') ,['class'=>'form-control']) !!}
            </div>


            <div class="form-group col-md-6">
                {!! Form::label('price', 'السعر' ) !!}
                {!! Form::number('price',  old('price') ,['class'=>'form-control']) !!}
            </div>


        </div>



        {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}



    </div>
    <!-- /.box-body -->



@endsection
