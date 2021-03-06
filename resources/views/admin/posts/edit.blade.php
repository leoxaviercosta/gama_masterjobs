@extends('template')

@section('content')
    <h1>Editar Post: {{ $post->title }}</h1>

    @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    {!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'put']) !!}

    @include('admin.posts._form')

    <div class="form-group">
        {!! Form::label('tags', 'Tags:') !!}
        {!! Form::text('tags', $post->tagList, ['class' => 'form-control', 'data-role' => 'tagsinput']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}

@endsection