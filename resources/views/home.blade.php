@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Welcome, {{ Auth::user()->name }}!</h2>
    <p>You are logged in.</p>
</div>
@endsection
