@extends('layouts.app')

@section('content')
<h1>{{ $student->name }}</h1>
<p>年齢: {{ $student->age }}</p>
<p>学科: {{ $student->major }}</p>
<a href="/students">戻る</a>
@endsection
