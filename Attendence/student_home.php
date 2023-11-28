<?php
// Student's Home Page
session_start();

// Check if the student is logged in
if (!isset($_SESSION['student_username'])) {
    header("Location: index.html");
    exit();
}

// Connect to your database (replace these details with your own)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get student ID and today's date
$student_id = $_SESSION['student_id'];
$today_date = date("Y-m-d");

// Check if the student has already added attendance for the day
$sql = "SELECT * FROM attendance WHERE student_id='$student_id' AND attendance_date='$today_date'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>Student's Home Page</h1>";
    echo "<p>You have already added attendance for today.</p>";
} else {
    // Allow the student to add attendance
    $insert_sql = "INSERT INTO attendance (student_id, attendance_date) VALUES ('$student_id', '$today_date')";
    if ($conn->query($insert_sql) === TRUE) {
        echo "<p>Attendance added successfully!</p>";
    } else {
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
    }
    echo "<h1>Student's Home Page</h1>";
    echo "<form action='add_attendance.php' method='post'>";
    echo "<input type='submit' value='Add Attendance'>";
    echo "</form>";
}

$conn->close();
?>
