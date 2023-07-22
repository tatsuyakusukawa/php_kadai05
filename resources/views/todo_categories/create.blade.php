<!DOCTYPE html>
<html>
<head>
    <title>新しいカテゴリを作成</title>
</head>
<body>
    <h1>新しいカテゴリを作成</h1>
    <form action="{{ route('todo_categories.store') }}" method="POST">
        @csrf

        <label for="CategoryName">カテゴリ名</label>
        <input type="text" name="CategoryName" id="CategoryName" required>
        <br>

        <input type="submit" value="作成">
    </form>
</body>
</html>
