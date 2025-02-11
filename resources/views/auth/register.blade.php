@extends('layouts.app')

@section('content')
<div class="container">
    <h2>新規登録</h2>
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf
        <div>
            <label for="name">名前:</label>
            <input type="text" id="name" name="name" value="{{ old('name') }}" required title="名前を入力してください。">
            @error('name')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="email">メールアドレス:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required title="有効なメールアドレスを入力してください。">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password" required title="パスワードを入力してください。">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="password_confirmation">パスワード確認:</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required title="パスワードを再入力してください。">
            @error('password_confirmation')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit">登録</button>
    </form>
</div>
@endsection
