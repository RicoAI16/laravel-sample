@extends('layouts.app')

@section('content')
    <h1>Laravel Posts App</h1>

    @if (session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    <a href="{{ route('posts.create') }}" class="btn">新しい投稿を作成</a>

    <ul>
        @foreach ($posts as $post)
            <li>
                <div>
                    <a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
                </div>
                <div>
                    <a href="{{ route('posts.edit', $post) }}" class="btn">編集</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn-delete">削除</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    {{ $posts->links() }}
@endsection
