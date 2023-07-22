<!DOCTYPE html>
<html>
<head>
    <title>Todo登録フォーム</title>
</head>
<body>
    <h1>Todo登録フォーム</h1>
    <form action="{{ route('todo_details.store') }}" method="POST">
        @csrf
        <label for="CategoryID">Todoカテゴリ</label>
        <select name="CategoryID" id="CategoryID">
            @foreach ($categories as $category)
                <option value="{{ $category->CategoryID }}">{{ $category->CategoryName }}</option>
            @endforeach
        </select>
        <br>

        <label for="Title">タイトル</label>
        <input type="text" name="Title" id="Title" required>
        <br>

        <label for="Content">内容</label>
        <textarea name="Content" id="Content" rows="5" required></textarea>
        <br>

        <label for="DueDate">期限</label>
        <input type="date" name="DueDate" id="DueDate">
        <br>
        <!-- 選択されたcategoryIDを送信したい -->
        <input type="submit" value="登録">
    </form>
</body>
</html>