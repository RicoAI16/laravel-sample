@extends('layouts.app')

@section('content')
<div class="container">
    <h2>パスワードリセット</h2>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div>
            <label for="email">メールアドレス:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit">パスワードリセットリンクを送信</button>
    </form>
</div>
@endsection
