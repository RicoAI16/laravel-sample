@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Welcome, {{ Auth::user()->name }}!</h2>
    <p>You are logged in.</p>
</div>
@endsection

@section('content')
<div class="container">
    <h2>Welcome, {{ Auth::user()->name }}!</h2>
    <p>You are logged in. Visit the <a href="{{ route('dashboard') }}">Dashboard</a>.</p>
</div>
@endsection
