@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Кабинет пользователя</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if(count($books) > 0)
                            @foreach($books as $el)
                                <div class="alert alert-info">
                                    <h3>{{ $el->name }}</h3>
                                    <hr>
                                    <a href="/public/books/{{ $el->id }}/edit" class="btn btn-info">Редактировать</a>
                                    <br><br>
                                    {!! Form::open(['action' => ['BooksController@destroy', $el->id], 'method' => 'POST']) !!}
                                    {{ Form::hidden('_method', 'DELETE') }}
                                    {{ Form::submit('Удалить книгу', ['class' => 'btn btn-danger']) }}
                                    {!! Form::close() !!}
                                </div>
                            @endforeach
                        @else
                            <h4>У Вас нет добавленных книг</h4>
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
