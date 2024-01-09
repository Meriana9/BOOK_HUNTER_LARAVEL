@extends('templates.index')

@section('title')
Popular Books et popular Authors
@stop

@section('content')
@include('books._populars' )
@include('authors._populars')

@stop
