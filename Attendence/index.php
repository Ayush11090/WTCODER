<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance System</title>
</head>
<body>
    <h1>Welcome to the Attendance System</h1>

    <!-- Teacher Login Form -->
    <form action="login.php" method="post">
        <h2>Teacher Login</h2>
        <input type="hidden" name="user_type" value="teacher">
        <label for="teacher_username">Username:</label>
        <input type="text" name="teacher_username" required>
        <br>
        <label for="teacher_password">Password:</label>
        <input type="password" name="teacher_password" required>
        <br>
        <input type="submit" name="submit" value="Login">
    </form>

    <!-- Student Login Form -->
    <form action="login.php" method="post">
        <h2>Student Login</h2>
        <input type="hidden" name="user_type" value="student">
        <label for="student_username">Username:</label>
        <input type="text" name="student_username" required>
        <br>
        <label for="student_password">Password:</label>
        <input type="password" name="student_password" required>
        <br>
        <input type="submit" name="submit"  value="Login">
    </form>
</body>
</html>
