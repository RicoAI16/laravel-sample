@extends('layouts.app')

@section('content')
<h1>学生リスト</h1>

<!-- Green buttons for navigation -->
<div style="margin-bottom: 15px;">
    <a href="/students" style="display: inline-block; margin-right: 10px; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">学生リスト</a>
    <a href="/students/create" style="display: inline-block; padding: 10px 20px; background-color: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">新しい学生を追加</a>
</div>

<table border="1">
    <tr>
        <th>名前</th>
        <th>年齢</th>
        <th>学科</th>
        <th>操作</th>
    </tr>
    @foreach ($students as $student)
        <tr>
            <td>{{ $student->name }}</td>
            <td>{{ $student->age }}</td>
            <td>{{ $student->major }}</td>
            <td>
                <!-- Edit link -->
                <a href="/students/{{ $student->id }}/edit">編集</a>

                <!-- Delete form with confirmation -->
                <form method="POST" action="/students/{{ $student->id }}" style="display: inline;" onsubmit="return confirm('本当に削除しますか？');">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>
@endsection
