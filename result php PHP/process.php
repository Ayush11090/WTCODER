
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>










<?php

// Connect to the database
$conn = mysqli_connect("localhost", "root", "", "vit_results");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the data from the input form
$name = $_POST["name"];
$roll_no = $_POST["roll_no"];
$subject1_mse = $_POST["subject1_mse"];
$subject1_ese = $_POST["subject1_ese"];
$subject2_mse = $_POST["subject2_mse"];
$subject2_ese = $_POST["subject2_ese"];
$subject3_mse = $_POST["subject3_mse"];
$subject3_ese = $_POST["subject3_ese"];
$subject4_mse = $_POST["subject4_mse"];
$subject4_ese = $_POST["subject4_ese"];

// Calculate the overall marks for each subject
$subject1_overall = (0.3 * $subject1_mse) + (0.7 * $subject1_ese);
$subject2_overall = (0.3 * $subject2_mse) + (0.7 * $subject2_ese);
$subject3_overall = (0.3 * $subject3_mse) + (0.7 * $subject3_ese);
$subject4_overall = (0.3 * $subject4_mse) + (0.7 * $subject4_ese);

function getGrade($marks) {
    if ($marks >= 90) {
        return "A";
    } elseif ($marks >= 80) {
        return "B";
    } elseif ($marks >= 70) {
        return "C";
    } elseif ($marks >= 60) {
        return "D";
    } else {
        return "F";
    }
}

// Use prepared statements to prevent SQL injection
$sql = "INSERT INTO students (name, roll_no, subject1_mse, subject1_ese, subject1_overall, subject1_grade, subject2_mse, subject2_ese, subject2_overall, subject2_grade, subject3_mse, subject3_ese, subject3_overall, subject3_grade, subject4_mse, subject4_ese, subject4_overall, subject4_grade) VALUES ('$name', $roll_no, $subject1_mse, $subject1_ese, $subject1_overall, '" . getGrade($subject1_overall) . "', $subject2_mse, $subject2_ese, $subject2_overall, '" . getGrade($subject2_overall) . "', $subject3_mse, $subject3_ese, $subject3_overall, '" . getGrade($subject3_overall) . "', $subject4_mse, $subject4_ese, $subject4_overall, '" . getGrade($subject4_overall) . "')";
$result = mysqli_query($conn, $sql);

// Display the results
$sql = "SELECT * FROM students";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>Name</th><th>Roll No.</th><th>Subject 1</th><th>Subject 2</th><th>Subject 3</th><th>Subject 4</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td><td>" . $row['roll_no'] . "</td>";
        echo "<td>" . $row['subject1_overall'] . " (" . $row['subject1_grade'] . ")</td>";
        echo "<td>" . $row['subject2_overall'] . " (" . $row['subject2_grade'] . ")</td>";
        echo "<td>" . $row['subject3_overall'] . " (" . $row['subject3_grade'] . ")</td>";
        echo "<td>" . $row['subject4_overall'] . " (" . $row['subject4_grade'] . ")</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No students found";
}

mysqli_close($conn);
?>

</body>
</html>
