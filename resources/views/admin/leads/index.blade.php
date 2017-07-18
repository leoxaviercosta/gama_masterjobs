@extends('template')

@section('content')
    <h1>Leads ({{ $leads->count() }} de 1000 convertidos)</h1>

    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Stack</th>
            <th>Endereço IP</th>
            <th>Incluído em</th>
        </tr>

        @foreach($leads as $lead)
            <tr>
                <td>{{ $lead->name }}</td>
                <td>{{ $lead->email }}</td>
                <td>{{ $lead->stack }}</td>
                <td>{{ $lead->ip_address }}</td>
                <td>{{ $lead->created_at }}</td>
            </tr>
        @endforeach

    </table>

    <!-- Adicionado paginação -->
    {!! $leads->render() !!}

@endsection