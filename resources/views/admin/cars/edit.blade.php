@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Auto Wijzigen</h1>

        <form action="{{ route('admin.cars.update', $car->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Naam:</label><br>
            <input type="text" name="name" value="{{ $car->name }}"><br><br>

            <label>Merk:</label><br>
            <input type="text" name="merk" value="{{ $car->merk }}"><br><br>

            <button type="submit" class="btn btn-primary">Opslaan</button>
        </form>
    </div>
@endsection
