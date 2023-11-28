<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Marks Input</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0PX;
            padding: 0;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        
        .input-group {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        }


        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Student Marks Input</h1>
    <form action="process.php" method="post">
    <div class="input-group">
        <label for="name">Student Name:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div class="input-group">
        <label for="roll_no">Roll Number:</label>
        <input type="number" id="roll_no" name="roll_no" required>
    </div>
    <div class="input-group">
        <label for="subject1_mse">Subject 1 MSE Marks:</label>
        <input type="number" id="subject1_mse" name="subject1_mse" min="0" max="100" required>
    </div>
    <div class="input-group">
        <label for="subject1_ese">Subject 1 ESE Marks:</label>
        <input type="number" id="subject1_ese" name="subject1_ese" min="0" max="100" required>
    </div>
    <div class="input-group">
        <label for="subject2_mse">Subject 2 MSE Marks:</label>
        <input type="number" id="subject2_mse" name="subject2_mse" min="0" max="100" required>
    </div>
    <div class="input-group">
        <label for="subject2_ese">Subject 2 ESE Marks:</label>
        <input type="number" id="subject2_ese" name="subject2_ese" min="0" max="100" required>
    </div>
    <div class="input-group">
        <label for="subject3_mse">Subject 3 MSE Marks:</label>
        <input type="number" id="subject3_mse" name="subject3_mse" min="0" max="100" required>
    </div>
    <div class="input-group">
        <label for="subject3_ese">Subject 3 ESE Marks:</label>
        <input type="number" id="subject3_ese" name="subject3_ese" min="0" max="100" required>
    </div>
    <div class="input-group">
        <label for="subject4_mse">Subject 4 MSE Marks:</label>
        <input type="number" id="subject4_mse" name="subject4_mse" min="0" max="100" required>
    </div>
    <div class="input-group">
        <label for="subject4_ese">Subject 4 ESE Marks:</label>
        <input type="number" id="subject4_ese" name="subject4_ese" min="0" max="100" required>
    </div>
    <div class="input-group">
        <input type="submit" value="Submit">
    </div>
    </form>
</body>
</html>
