@extends('template')

@section('content')
    <h1>Novo Post</h1>

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

    {!! Form::open(['route'=>'admin.posts.store', 'method'=>'post']) !!}

    @include('admin.posts._form')

    <div class="form-group">
        {!! Form::label('tags', 'Tags:') !!}
        {!! Form::text('tags', null, ['class' => 'form-control']) !!}
        <br />
        <span class="btn btn-default btn-file">
            Selecionar Arquivo  {{ Form::file('file', '', array('id' => '', 'class' => '')) }}
        </span>
    </div>

    <div class="form-group">
        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}

@endsection