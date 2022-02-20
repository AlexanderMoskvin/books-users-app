@extends('layouts.app')

@section('page-title')
    {{ $book->name }}
@endsection

@section('content')
    <a href="/public/books" class="btn btn-warning">Назад</a><br>
    <h1>{{ $book->name }}</h1>
    <p><b>Автор: </b>{{ ($book->user->name) }}</p>
    @if(Auth::user()->id == $book->user_id)
    <a href="/public/books/{{$book->id}}/edit" class="btn btn-warning">Редактировать</a>
    <br><br>
    {!! Form::open(['action' => ['BooksController@destroy', $book->id], 'method' => 'POST']) !!}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Удалить книгу', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}
    @endif
@endsection
