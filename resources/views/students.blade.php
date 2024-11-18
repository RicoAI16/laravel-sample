<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>学生リスト</title>
</head>
<body>
    <h1>学生リスト</h1>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>年齢</th>
            <th>学科</th>
        </tr>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student['名前'] }}</td>
                <td>{{ $student['年齢'] }}</td>
                <td>{{ $student['学科'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
