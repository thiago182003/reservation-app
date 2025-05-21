@extends('layouts.app')

@section('content')
    <h1>Editar Reserva</h1>

    @if ($errors->any())
        <div>
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reservations.update', $reservation) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="name">Nome</label>
        <input type="text" name="name" id="name" value="{{ $reservation->name }}" required>

        <label for="date">Data</label>
        <input type="date" name="date" id="date" value="{{ $reservation->date }}" required>

        <label for="time">Hora</label>
        <input type="time" name="time" id="time" value="{{ $reservation->time }}" required>

        <label for="people_count">Número de Pessoas</label>
        <input type="number" name="people_count" id="people_count" value="{{ $reservation->people_count }}" required min="1">

        <button type="submit">Atualizar</button>
    </form>

    <br>
    <a href="{{ route('reservations.index') }}">Cancelar</a>
@endsection
