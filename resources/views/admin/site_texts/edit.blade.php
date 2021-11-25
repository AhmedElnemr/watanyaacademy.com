@extends('admin.index')

<?php
$home_title    = trans('admin.main_name' ) . ' | ' . trans('admin.edit_', ['name_value'=> $site_text->title] );
$first_title   = ["title"=>'نصوص الموقع ' , "url"=> aurl('site_text') ];
$secind_title  = ["title"=> trans('admin.edit_', ['name_value'=> $site_text->title] ) , "url"=> '' ];
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
            {!! Form::open( ['route' => ['site_text.update', $site_text->id], 'method' => 'put', 'files'=>true]  ) !!}



            <div class="row">


                <div class="form-group col-md-4" hidden>
                    {!! Form::label('key_word', 'الكلمة المفتاحية ( key_word )' ) !!}
                    {!! Form::text('key_word', $site_text->key_word ,['class'=>'form-control']) !!}
                </div>

                <div class="form-group col-md-6" >
                    {!! Form::label('title', ' العنوان بالصفحة  ' ) !!}
                    {!! Form::text('title', $site_text->title ,['class'=>'form-control']) !!}
                </div>

                @if($site_text->key_word == "main_about")
                    <div class="form-group col-md-3">
                        {!! Form::label('color_title', 'لون العنوان  ') !!}
                        <input type="color" name="color_title"  class="form-control" value="{{ $site_text->color_title  }}">
                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::label('color_contents', 'لون المحتوى   ') !!}
                        <input type="color" name="color_contents"  class="form-control" value="{{ $site_text->color_contents  }}">
                    </div>
                @endif

                @if(in_array($site_text->key_word,["word_of_prestent",'vision','goals','message']))
                <div class="form-group col-md-6">
                    {!! Form::label('logo', 'الصوره ') !!}
                    <input type="file" name="logo" id="input-file-now-custom-1" class="dropify"
                           data-default-file="{{ GetImg( $site_text->logo ) }}">
                </div>
                @endif

              {{--  @if($site_text->key_word != "main_about")
                <div class="form-group col-md-6">
                    {!! Form::label('video', 'الفيديو') !!}
                    <input type="file" name="video" id="input-file-now-custom-1" class="dropify"
                           data-default-file="{{ GetImg( $site_text->video ) }}">
                </div>
                @endif--}}
                <div class="form-group col-md-12">
                    {!! Form::label('contents', 'المحتوى' ) !!}
                    {!! Form::textarea('contents',  $site_text->contents ,['class'=>'form-control']) !!}
                </div>



            </div>




            {!! Form::submit(trans('admin.save'),['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->


@endsection
