@extends('layouts.app')

@section('content')
<h1>学生を編集</h1>

<form action="/students/{{ $student->id }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">名前:</label>
    <input type="text" name="name" value="{{ $student->name }}" required>

    <label for="age">年齢:</label>
    <input type="number" name="age" value="{{ $student->age }}" required>

    <label for="major">学科:</label>
    <input type="text" name="major" value="{{ $student->major }}" required>

    <button type="submit">学生を更新</button>
</form>

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
