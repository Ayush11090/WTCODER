<?php
// Teacher's Home Page
session_start();

// Check if the teacher is logged in
if (!isset($_SESSION['teacher_username'])) {
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

// Fetch attendance data for all students
$sql = "SELECT * FROM attendance";
$result = $conn->query($sql);

echo "<h1>Teacher's Home Page</h1>";
echo "<h2>Attendance of All Students</h2>";

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>Student ID</th><th>Attendance Date</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["student_id"] . "</td><td>" . $row["attendance_date"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "No attendance records found.";
}

$conn->close();
?>
