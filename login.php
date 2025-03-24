<?php
session_start();

// Dummy credentials (replace with database lookup)
$users = [
    'user' => ['username' => 'user1', 'password' => 'userpass'],
    'admin' => ['username' => 'admin1', 'password' => 'adminpass']
];

// Get submitted values
$role = $_POST['role'] ?? '';
$username = $_POST['user'] ?? '';
$password = $_POST['pass'] ?? '';

// Check if role is valid
if (!isset($users[$role])) {
    die("Invalid role selected.");
}

// Validate credentials
if ($username === $users[$role]['username'] && $password === $users[$role]['password']) {
    // Store session data
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $role;

    // Redirect based on role
    if ($role === 'admin') {
        header("Location: admin_dashboard.php");
    } else {
        header("Location: user_dashboard.php");
    }
    exit;
} else {
    echo "<h2 style='color:red; text-align:center;'>Invalid credentials for $role.</h2>";
    echo "<p style='text-align:center;'><a href='index.html'>Try Again</a></p>";
}
?>
