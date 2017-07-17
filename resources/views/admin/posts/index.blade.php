@extends('template')

@section('content')
    <h1>Posts</h1>

    <a href="{{ route('admin.posts.create') }}" class="btn btn-success">Novo Post</a>
    <br /><br />

    <table class="table">
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Incluído em</th>
            <th>Incluído por</th>
            <th>Ações</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->operator }}</td>
                <td>
                    <a href="{{ route('admin.posts.edit', ['id' => $post->id]) }}" class="btn btn-success">Editar</a>
                    <a href="{{ route('admin.posts.destroy', ['id' => $post->id]) }}" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
        @endforeach

    </table>

    <!-- Adicionado paginação -->
    {!! $posts->render() !!}

@endsection