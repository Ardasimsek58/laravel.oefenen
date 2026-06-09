@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Alle Categorieën</h1>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Naam</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection


