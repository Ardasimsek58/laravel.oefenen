@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0">Auto's</h5>
        <a href="{{ route('admin.cars.create') }}" class="btn btn-dark btn-sm">+ Voeg toe</a>
    </div>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>Naam</th>
                <th>Merk</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cars as $car)
            <tr>
                <td>{{ $car->name }}</td>
                <td>{{ $car->merk }}</td>
                <td class="text-end">
                    <a href="{{ route('admin.cars.show', $car->id) }}" class="btn btn-sm btn-outline-secondary">Details</a>
                    <a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-sm btn-outline-secondary">Wijzigen</a>
                    <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-outline-danger">Verwijder</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
