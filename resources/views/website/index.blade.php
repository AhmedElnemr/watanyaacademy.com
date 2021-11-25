@extends('website.layouts.layout')

@section('page_title')
    {{ (isset($title))? $title:" الاكاديمية " }}
@endsection


@section('content')



    @include('website.home_components.home_banner')


    @include('website.home_components.about')

    @include('website.home_components.vedio')


    @include('website.home_components.courses')


    @include('website.home_components.our_team')


    @include('website.home_components.counters')


    @include('website.home_components.news')


    @include('website.home_components.our_client')




@endsection







