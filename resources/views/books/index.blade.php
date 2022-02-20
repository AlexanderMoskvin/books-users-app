@extends('layouts.app')

@section('page-title')
    Все статьи на сайте
@endsection

@section('content')
    <h1>Все книги</h1>
        @foreach($books as $el)
            <div class="well">
                <a href="/public/books/{{ $el->id }}"><h3 class="mt-3">{{ $el->name }}</h3></a>
                <p><b>Автор: </b>{{ ($el->user->name) }}</p>
            </div>
        @endforeach
@endsection
