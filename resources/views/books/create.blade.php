@extends('layouts.app')

@section('page-title')
    Добавление книги
@endsection

@section('content')
    <h1>Добавление книги</h1>
    {!! Form::open(['action' => 'BooksController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('name', 'Название книги') }}
            {{ Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Введите название книги']) }}
        </div>
        {{ Form::submit('Добавить', ['class' => 'btn btn-success']) }}
    {!! Form::close() !!}
@endsection
