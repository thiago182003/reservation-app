@extends('layouts.app')

@section('content')
    <h1>Detalhes da Reserva</h1>

    <p><strong>Nome:</strong> {{ $reservation->name }}</p>
    <p><strong>Data:</strong> {{ $reservation->date }}</p>
    <p><strong>Hora:</strong> {{ $reservation->time }}</p>
    <p><strong>Pessoas:</strong> {{ $reservation->people_count }}</p>

    <a href="{{ route('reservations.edit', $reservation) }}">Editar</a> |
    <a href="{{ route('reservations.index') }}">Voltar</a>
@endsection
