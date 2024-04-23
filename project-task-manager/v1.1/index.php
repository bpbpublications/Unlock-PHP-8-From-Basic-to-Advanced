<?php
include_once 'config_global.php';
include_once 'process_tasks.php';

if(!isset($_SESSION['userLogged'])){
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TITLE ?></title>
</head>
<body>
    <h1>Task Manager</h1>

    <form action="" method="POST">
        <input type="text" name="task" placeholder="Add a new task" required>
        <button type="submit">Add Task</button>
    </form>

    <?php if (!empty($_SESSION['tasks'])): ?>
        <h2>New Task Added:</h2>
        <?php foreach ($_SESSION['tasks'] as $index => $task): ?>
            <li style="margin-bottom: 5px">
                <?= $task['task']; ?>
                <?php if(!$task['completed']): ?>
                    <form action="" method="POST" style="display: inline;">
                        <input type="hidden" name="index" value="<?php echo $index; ?>">
                        <button type="submit" name="completed">Mark completed</button>
                    </form>
                <?php else: ?>
                    <strong style="color:green">concluded</strong>
                <?php endif; ?>
                <form action="" method="POST" style="display: inline;">
                    <input type="hidden" name="index" value="<?php echo $index; ?>">
                    <button type="submit" name="delete">delete</button>
                </form>
            </li>
        <?php endforeach; ?>

        <form action="" method="POST" style="margin-top: 25px;">
            <button type="submit" name="clear">Clear All</button>
        </form>
    <?php endif; ?>
</body>
</html>
