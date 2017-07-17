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
        {!! Form::hidden('operator', Auth::user()->name) !!}
        {!! Form::label('tags', 'Tags:') !!} <br />
        {!! Form::text('tags', null, ['class' => 'form-control', 'data-role' => 'tagsinput']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
    </div>

    {!! Form::close() !!}

@endsection