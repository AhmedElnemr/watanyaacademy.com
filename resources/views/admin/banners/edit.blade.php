@extends('admin.index')

<?php
$home_title    = trans('admin.main_name' ) . ' | ' . trans('admin.edit_', ['name_value'=> $banner->title] );
$first_title   = ["title"=>'البنرات' , "url"=> aurl('banner') ];
$secind_title  = ["title"=> trans('admin.edit_', ['name_value'=> $banner->title] ) , "url"=> '' ];
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
            {!! Form::open( ['route' => ['banner.update', $banner->id], 'method' => 'put', 'files'=>true]  ) !!}



            <div class="row">


                <div class="form-group col-md-4" hidden>
                    {!! Form::label('key_word', 'الكلمة المفتاحية ( key_word )' ) !!}
                    {!! Form::text('key_word', $banner->key_word ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-4" hidden>
                    {!! Form::label('url_name', ' url ' ) !!}
                    {!! Form::text('url_name', $banner->url_name ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-12" {{($banner->key_word != "home_bannar")? "hidden":""}}>
                    {!! Form::label('title', ' العنوان   ' ) !!}
                    {!! Form::text('title', $banner->title ,['class'=>'form-control']) !!}
                </div>


                <div class="form-group col-md-12" >
                    {!! Form::label('background', 'الخلفية') !!}
                    <input type="file" name="background" id="input-file-now-custom-1" class="dropify"
                           data-default-file="{{ GetImg( $banner->background ) }}">
                </div>

                <div class="form-group col-md-12" {{($banner->key_word != "home_bannar")? "hidden":""}}>
                    {!! Form::label('contents', 'المحتوى' ) !!}
                    {!! Form::textarea('contents',  $banner->contents ,['class'=>'form-control']) !!}
                </div>
                @if($banner->key_word == "home_bannar")
                    <div class="form-group col-md-6">
                        {!! Form::label('color_title', 'لون العنوان  ') !!}
                        <input type="color" name="color_title"  class="form-control" value="{{ $banner->color_title  }}">
                    </div>
                    <div class="form-group col-md-6">
                        {!! Form::label('color_contents', 'لون المحتوى   ') !!}
                        <input type="color" name="color_contents"  class="form-control" value="{{ $banner->color_contents  }}">
                    </div>
                @endif


            </div>




            {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->


@endsection
