@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reset Password</h2>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit">Send Password Reset Link</button>
    </form>
</div>
@endsection
