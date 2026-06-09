@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Details van de Auto</h1>

        <div class="card my-4" style="max-width: 500px;">
            <div class="card-body">
                <p><strong>Naam:</strong> {{ $car->name }}</p>
                <p><strong>Merk:</strong> {{ $car->merk }}</p>
                <p><strong>Toegevoegd op:</strong> {{ $car->created_at->format('d-m-Y H:i') }}</p>
            </div>
        </div>

        <a href="{{ route('admin.cars.index') }}" class="btn btn-secondary">Terug naar overzicht</a>
    </div>
@endsection
