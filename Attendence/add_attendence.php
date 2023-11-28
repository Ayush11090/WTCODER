<?php
// Add Attendance Page for Students
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
    echo "Attendance already added for today.";
} else {
    // Add attendance to the database
    $insert_sql = "INSERT INTO attendance (student_id, attendance_date) VALUES ('$student_id', '$today_date')";

    if ($conn->query($insert_sql) === TRUE) {
        echo "Attendance added successfully.";
    } else {
        // Error handling
        echo "Error: " . $insert_sql . "<br>" . $conn->error;
        // Log the error for further debugging
        error_log("Attendance add failed: " . $insert_sql . "<br>" . $conn->error, 0);
    }
}

$conn->close();

?>
