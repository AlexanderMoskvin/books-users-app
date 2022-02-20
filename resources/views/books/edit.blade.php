@extends('layouts.app')

@section('page-title')
    Обновление книги
@endsection

@section('content')
    <h1>Обновление книги</h1>
    {!! Form::open(['action' => ['BooksController@update', $book->id], 'method' => 'POST']) !!}
    <div class="form-group">
        {{ Form::label('name', 'Название книги') }}
        {{ Form::text('name', $book->name, ['class' => 'form-control', 'placeholder' => 'Введите название книги']) }}
    </div>
    {{ Form::hidden('_method', 'PUT') }}
    {{ Form::submit('Обновить', ['class' => 'btn btn-success']) }}
    {!! Form::close() !!}
@endsection
