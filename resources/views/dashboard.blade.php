@extends('layouts.app')

@section('content')
<div class="container">
    <h1>ダッシュボードへようこそ</h1>
    <p>投稿を管理したり、分析を確認したりできます。</p>
    <a href="{{ route('posts.index') }}" class="btn">投稿リストを見る</a>
</div>
@endsection
