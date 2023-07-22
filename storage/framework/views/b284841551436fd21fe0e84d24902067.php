<!DOCTYPE html>
<html>
<head>
    <title>Todo一覧</title>
</head>
<body>
    <h1>Todo一覧</h1>
    <a href="<?php echo e(route('todo_categories.create')); ?>">新規カテゴリ作成</a>
    <a href="<?php echo e(route('todo_details.create')); ?>">新規詳細作成</a>

    <h2>Todoカテゴリ</h2>
    <ul>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($category->CategoryName); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h2>Todo詳細</h2>
    <ul>
        <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($detail->Title); ?> - <?php echo e($detail->Content); ?> - <?php echo e($detail->DueDate); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/todos/index.blade.php ENDPATH**/ ?>