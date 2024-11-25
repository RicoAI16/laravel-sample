@extends('layouts.app')

@section('content')
<h1>新しい学生を追加</h1>

<!-- Button to go back to the student list -->
<a href="/students" style="display: inline-block; margin-bottom: 15px; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">
    学生リスト
</a>

<form action="/students" method="POST">
    @csrf
    <label for="name">名前:</label>
    <input type="text" name="name" required>

    <label for="age">年齢:</label>
    <input type="number" name="age" required>

    <label for="major">学科:</label>
    <input type="text" name="major" required>

    <button type="submit" style="margin-top: 15px; padding: 10px 20px; background-color: #4CAF50; color: white; border: none; border-radius: 5px;">
        学生を保存
    </button>
</form>

<!-- Display validation errors -->
@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
