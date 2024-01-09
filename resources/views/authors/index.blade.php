@extends('templates.index')

@section('title')
@stop


@section('content')

    @php
        @authors = \App\Models\Author::orderBy('created_at', 'DESC')->paginate(9);
    @endphp
    <h2 class="text-2xl font-bold mb-4">Authors</h2>
    @include('authors._index', [
        'authors' => @authors,
    ])



    <div class="flex items-center justify-between my-6">Pagination </div>

@stop
