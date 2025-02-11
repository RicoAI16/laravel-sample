@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ログイン</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        {{-- ✅ Only show validation errors beneath each input field --}}
                        <div class="form-group">
                            <label for="email">メールアドレス:</label>
                            <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                                <small class="text-danger">{{ $message }}</small> {{-- ✅ Show error under input field only --}}
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">パスワード:</label>
                            <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                                <small class="text-danger">{{ $message }}</small> {{-- ✅ Show error under input field only --}}
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">ログイン</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
