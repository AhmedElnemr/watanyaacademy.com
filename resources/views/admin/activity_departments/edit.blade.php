@extends('admin.index')

<?php
$home_title    = trans('admin.main_name' ) . ' | ' . trans('admin.edit_', ['name_value'=> $activity_department->title] );
$first_title   = ["title"=>'اقسام الانشطة' , "url"=> aurl('activity_department') ];
$secind_title  = ["title"=> trans('admin.edit_', ['name_value'=> $activity_department->title] ) , "url"=> '' ];
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
            {!! Form::open( ['route' => ['activity_department.update', $activity_department->id], 'method' => 'put', 'files'=>true]  ) !!}



            <div class="row">


                <div class="form-group col-md-12">
                    {!! Form::label('title', ' عنوان القسم ' ) !!}
                    {!! Form::text('title', $activity_department->title ,['class'=>'form-control']) !!}
                </div>


            </div>




            {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->


@endsection
