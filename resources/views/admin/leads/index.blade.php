@extends('template')

@section('content')
    <h1>Leads ({{ $leads->count() }} de 1000 convertidos)</h1>

    <table class="table">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Stack</th>
            <th>Endereço IPV4</th>
            <th>Endereço IPV6</th>
            <th>Incluído em</th>
        </tr>

        @foreach($leads as $lead)
            <tr>
                <td>{{ $lead->name }}</td>
                <td>{{ $lead->email }}</td>
                <td>{{ $lead->stack }}</td>
                <td>{{ $lead->ipv4_address }}</td>
                <td>{{ $lead->ipv6_address }}</td>
                <td>{{ $lead->created_at }}</td>
            </tr>
        @endforeach

    </table>

    <!-- Adicionado paginação -->
    {!! $leads->render() !!}

@endsection