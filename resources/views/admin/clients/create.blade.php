@extends('admin.index')

<?php
$home_title    =  trans('admin.main_name' )  . ' | ' . $title ;
$first_title   = ["title"=>'البنرات', "url"=> aurl('client') ];
$secind_title  = ["title"=>$title , "url"=> aurl('client/create') ];
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

        {!! Form::open( ['route' => 'client.store',  'method' => 'POST','files'=>true] ) !!}


        <div class="row">

            <div class="form-group col-md-12">
                {!! Form::label('image', 'الصورة') !!}
                <input type="file" name="image" id="input-file-now-custom-1" class="dropify"
                       data-default-file="" required>
            </div>


        </div>




        {!! Form::submit(trans('admin.add'),['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}



    </div>
    <!-- /.box-body -->



@endsection
