<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Posts App</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
        }
        header nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
            font-size: 16px;
        }
        header nav a:hover {
            text-decoration: underline;
        }
        main {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        .btn {
            display: inline-block;
            padding: 10px 15px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #218838;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fdfdfd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        ul li a {
            color: #007bff;
            text-decoration: none;
            margin-right: 10px;
        }
        ul li a:hover {
            text-decoration: underline;
        }
        ul li button {
            background-color: #dc3545;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            cursor: pointer;
        }
        ul li button:hover {
            background-color: #c82333;
        }
        .success-message {
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('posts.index') }}">投稿リスト</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
