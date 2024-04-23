<h1>Task Manager</h1>

<form action="/tasks/create" method="POST">
    <input type="text" name="task" placeholder="Add a new task" required>
    <button type="submit">Add Task</button>
</form>

<?php if(isset($_GET['error']) && !empty($_GET['error'])): ?>
<div>
    <p style="color: red">
        <strong><?= $_GET['error'] ?></strong>
    </p>
</div>
<?php endif; ?>

<?php if(isset($_GET['success']) && !empty($_GET['success'])): ?>
<div>
    <p style="color: green">
        <strong><?= $_GET['success'] ?></strong>
    </p>
</div>
<?php endif; ?>

<?php if (!empty($tasks)): ?>
    <h2>New Task Added:</h2>
    <?php foreach ($tasks as $index => $task): ?>
        <li style="margin-bottom: 5px">
            <?= $task->title; ?>
            <?php if(!$task->is_concluded): ?>
                <form action="/tasks/completed" method="POST" style="display: inline;">
                    <input type="hidden" name="id" value="<?= $task->id ?>">
                    <input type="hidden" name="action" value="markTaskAsCompleted">
                    <button type="submit" name="completed">Mark completed</button>
                </form>
            <?php else: ?>
                <strong style="color:green">concluded</strong>
            <?php endif; ?>
            <form action="/tasks/delete" method="POST" style="display: inline;">
                <input type="hidden" name="id" value="<?= $task->id ?>">
                <input type="hidden" name="action" value="deleteTaskById">
                <button type="submit" name="delete">delete</button>
            </form>
        </li>
    <?php endforeach; ?>

    <form action="/tasks/delete-all" method="POST" style="margin-top: 25px;">
        <button type="submit" name="clear">Clear All</button>
    </form>
<?php endif; ?>




