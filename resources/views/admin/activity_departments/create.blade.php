@extends('admin.index')

<?php
$title = 'اضافه قسم جديد للانشطه';
$home_title    =  trans('admin.main_name' )  . ' | ' . $title ;
$first_title   = ["title"=>'اقسام الانشطة', "url"=> aurl('activity_department') ];
$secind_title  = ["title"=>$title , "url"=> aurl('activity_department/create') ];
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

        {!! Form::open( ['route' => 'activity_department.store',  'method' => 'POST','files'=>true] ) !!}



        <div class="row">

            <div class="form-group col-md-12">
                {!! Form::label('title', ' عنوان القسم ' ) !!}
                {!! Form::text('title', old('title') ,['class'=>'form-control']) !!}
            </div>


        </div>



        {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}



    </div>
    <!-- /.box-body -->



@endsection
