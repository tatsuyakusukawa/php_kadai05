<!DOCTYPE html>
<html>
<head>
    <title>Todo登録フォーム</title>
</head>
<body>
    <h1>Todo登録フォーム</h1>
    <form action="<?php echo e(route('todo_details.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="CategoryID">Todoカテゴリ</label>
        <select name="CategoryID" id="CategoryID">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($category->CategoryID); ?>"><?php echo e($category->CategoryName); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</html><?php /**PATH /var/www/html/resources/views/todo_details/create.blade.php ENDPATH**/ ?>