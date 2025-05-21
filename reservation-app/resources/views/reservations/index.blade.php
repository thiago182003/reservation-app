@extends('layouts.app')

@section('content')
    <h1>Lista de Reservas</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if($reservations->isEmpty())
        <p>Nenhuma reserva cadastrada ainda.</p>
    @else
        @foreach($reservations as $reservation)
            <div>
                <p>
                    <strong>{{ $reservation->name }}</strong> - 
                    {{ $reservation->date }} às {{ $reservation->time }} 
                    ({{ $reservation->people_count }} pessoas)
                </p>
                <a href="{{ route('reservations.show', $reservation) }}">Ver</a> |
                <a href="{{ route('reservations.edit', $reservation) }}">Editar</a> |
                <form action="{{ route('reservations.destroy', $reservation) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Tem certeza?')">Excluir</button>
                </form>
                <hr>
            </div>
        @endforeach
    @endif

    <a href="{{ route('reservations.create') }}">Nova Reserva</a>
@endsection
