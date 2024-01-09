@extends('templates.index')

@section('title')
@stop


@section('content')
    <h2 class="text-2xl font-bold mb-4">Authors</h2>
    @include('authors._index', [
        'authors' => \App\Models\Book::orderBy('created_at', 'DESC')->limit(9)->get(),
    ])



    <div class="flex items-center justify-between my-6">Pagination </div>

@stop
