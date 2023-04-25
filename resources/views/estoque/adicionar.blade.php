@extends('base')

@section('title', 'Estoque')

@section('content')

<form action="{{ route('estoque/adicionar') }}" method="post">
    @csrf
    <input type="text" name="nome">
    <input type="number" name="quantidade">
    <input type="submit" value="enviar">
</form>


@endsection