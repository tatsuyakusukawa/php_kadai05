<!DOCTYPE html>
<html>
<head>
    <title>Todo一覧</title>
</head>
<body>
    <h1>Todo一覧</h1>
    <a href="{{ route('todo_categories.create') }}">新規カテゴリ作成</a>
    <a href="{{ route('todo_details.create') }}">新規詳細作成</a>

    <h2>Todoカテゴリ</h2>
    <ul>
        @foreach ($categories as $category)
            <li>{{ $category->CategoryName }}</li>
        @endforeach
    </ul>

    <h2>Todo詳細</h2>
    <ul>
        @foreach ($details as $detail)
            <li>{{ $detail->Title }} - {{ $detail->Content }} - {{ $detail->DueDate }}</li>
        @endforeach
    </ul>
</body>
</html>
