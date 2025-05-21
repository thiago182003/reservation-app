@extends('layouts.app')

@section('content')
    <h1>Fazer uma Nova Reserva</h1>

    @if ($errors->any())
        <div>
            <ul style="color: red;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf

        <label for="name">Nome</label>
        <input type="text" name="name" id="name" required>

        <label for="date">Data</label>
        <input type="date" name="date" id="date" required>

        <label for="time">Hora</label>
        <input type="time" name="time" id="time" required>

        <label for="people_count">Número de Pessoas</label>
        <input type="number" name="people_count" id="people_count" required min="1">

        <button type="submit">Reservar</button>
    </form>

    <br>
    <a href="{{ route('reservations.index') }}">Ver reservas</a>
@endsection
