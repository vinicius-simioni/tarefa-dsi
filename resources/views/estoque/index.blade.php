@extends('base')

@section('title', 'Estoque')

@section('content')

<div>

    <table>
        <thead>
            <tr>
            <th>ID</th>
            <th>Atributo</th>
            <th>Quantidade</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($lista as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['nome'] }}</td>
                <td>{{ $item['quantidade'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>



@endsection