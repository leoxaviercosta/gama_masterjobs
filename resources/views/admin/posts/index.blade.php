@extends('template')

@section('content')
    <h1>Posts</h1>

    <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Novo Post</a>
    <br /><br />

    <table class="table">
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Ações</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>
                    <a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" class="btn btn-primary">Editar</a>
                    <a href="{{ route('admin.posts.destroy', ['id' => $post->id]) }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach

    </table>

    <!-- Adicionado paginação -->
    {!! $posts->render() !!}

@endsection