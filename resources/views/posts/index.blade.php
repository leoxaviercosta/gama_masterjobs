@extends('template')

@section('content')
    <h1>Cadastre-se</h1>
    {!! Form::open(['route'=>'register', 'method'=>'post', 'files' => 'true']) !!}
    <div class="form-group">
        <div class="row">
            <div class="col-xs-5">{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nome']) !!}</div>
            <div class="col-xs-5">{!! Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'E-mail']) !!}</div>
            <div class="col-xs-2">{!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}</div>
            <span class="btn btn-default">
                {{ Form::file('file') }}
            </span>
        </div>
    </div>
    {!! Form::close() !!}
    <hr>
    <h1>Blog</h1>

    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        <b>Tags:</b>
        @foreach($post->tags as $tag)
            {{ $tag->name }} |
        @endforeach

        <h3>Comments</h3>
        @foreach($post->comments as $comment)
            <b>Name: </b> {{ $comment->name }} <br>
            <b>Comment: </b> {{ $comment->comment }}
        @endforeach

        <hr>
    @endforeach

    <!-- Adicionado paginação -->
    {!! $posts->render() !!}

@endsection