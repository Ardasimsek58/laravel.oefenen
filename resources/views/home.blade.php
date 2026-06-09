@extends('layouts.app')

@section('content')
<div class="container mt-4">

    @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif

    <p>{{ __('You are logged in!') }}</p>

</div>
@endsection
