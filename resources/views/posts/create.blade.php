@extends('layouts.app')

@section('content')
    <h1>新しい投稿を作成</h1>

    @if ($errors->any())
        <div>
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
        <textarea id="content" name="content" required>{{ old('content') }}</textarea>

        <button type="submit">投稿する</button>
    </form>
@endsection
