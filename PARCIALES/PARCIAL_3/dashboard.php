<?php
require_once "funciones.php"
requireLogin();

$error = '';
$success = '';


//colocar condicionales de request method
// colocar el nombre y la fecha de tiempo limite 
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $title = trim($_POST["title"]?? "");
    $due_date = $_POST["due_date"]?? "";
}

// validar que los campos esten llenos 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title'] ?? '');
    $due_date = $_POST['due_date'] ?? '';

    // Validate the task input
    if (empty($title) || empty($due_date)) {
        $error = 'All fields are required';
    } elseif (strtotime($due_date) < strtotime('today')) {
        $error = 'Due date must be in the future';
    } else {
        // Store the new task in the session
        $_SESSION['tasks'][] = [
            'title' => $title,
            'due_date' => $due_date,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $success = 'Task added successfully';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Task Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <a href="logout.php">Logout</a>

    <h2>Your Tasks</h2>
    <?php if (!empty($_SESSION['tasks'])): ?>
        <ul>
            <?php foreach ($_SESSION['tasks'] as $task): ?>
                <li>
                    <strong><?php echo htmlspecialchars($task['title']); ?></strong> - 
                    Due: <?php echo htmlspecialchars($task['due_date']); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No tasks found. Add a new task!</p>
    <?php endif; ?>

    <h2>Add New Task</h2>
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <?php if ($success): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <form method="POST">
        <div>
            <label>Task Title:</label>
            <input type="text" name="title" required>
        </div>
        <div>
            <label>Due Date:</label>
            <input type="date" name="due_date" required>
        </div>
        <button type="submit">Add Task</button>
    </form>
</body>
</html>


