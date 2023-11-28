<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Connect to your database (replace these details with your own)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "system";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if it's a teacher or student login
    if (isset($_POST['user_type']) && $_POST['user_type'] === 'teacher') {
        // Process teacher login
        $teacher_username = $_POST['teacher_username'];
        $teacher_password = $_POST['teacher_password'];

        // Validate teacher credentials (you should implement proper validation and hashing)
        // For simplicity, plain text passwords are used here (NOT RECOMMENDED for production)
        $sql = "SELECT * FROM teachers WHERE username='$teacher_username' AND password='$teacher_password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['teacher_username'] = $teacher_username;
            // Redirect to teacher's home page
            header("Location: teacher_home.php");
            exit();
        } else {
            echo "Invalid teacher credentials.";
        }
    } elseif (isset($_POST['user_type']) && $_POST['user_type'] === 'student') {
        // Process student login
        $student_username = $_POST['student_username'];
        $student_password = $_POST['student_password'];

        // Validate student credentials (you should implement proper validation and hashing)
        // For simplicity, plain text passwords are used here (NOT RECOMMENDED for production)
        $sql = "SELECT * FROM students WHERE username='$student_username' AND password='$student_password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $student_id = $row['id'];
            
            // Set student ID in a cookie
            setcookie('student_id', $student_id, time() + 3600, '/'); // Cookie expires in 1 hour

            $_SESSION['student_username'] = $student_username;
            // Redirect to student's home page
            $_SESSION['student_id'] = $student_id;
            header("Location: student_home.php");
            exit();
        } else {
            echo "Invalid student credentials.";
        }
    }

    mysqli_close($conn);
}
?>
