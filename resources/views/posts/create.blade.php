@extends('layouts.app')

@section('content')
    <h1>新しい投稿を作成</h1>

    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <label for="title">タイトル</label>
        <input type="text" id="title" name="title" value="{{ old('title') }}" required>

        <label for="content">内容</label>
        <textarea id="content" name="content" rows="5" required>{{ old('content') }}</textarea>

        <button type="submit" class="btn">投稿する</button>
        <a href="{{ route('posts.index') }}" class="btn">戻る</a>
    </form>
@endsection
