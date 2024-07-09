@extends('front.layouts.new-layout')
@section('title', isset($title) ? $title : 'Home')
@section('description', isset($description) ? $description : '')
@section('keywords', isset($keywords) ? $keywords : '')

@section('content')
    @include('front.home.themeone')
@endsection
