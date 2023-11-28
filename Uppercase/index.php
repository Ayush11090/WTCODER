<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve text input from the form
    $inputText = $_POST['inputText'];

    // Convert the input text to lowercase
    $lowercaseText = strtolower($inputText);

    // Capitalize the first character of each word
    $capitalizedText = ucwords($lowercaseText);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Uppercase to Lowercase with Capitalized First Letters</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="inputText">Enter Text:</label><br>
        <input type="text" id="inputText" name="inputText"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Display the transformed text if it's available
    if (isset($capitalizedText)) {
        echo "<h2>Transformed Text:</h2>";
        echo "<p>$capitalizedText</p>";
    }
    ?>
</body>
</html>



///////////////////////////////////////

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter</title>
</head>
<body>
    <h1>Word Case Converter</h1>
    <div>
    <form action="" method="post">
        <label for="word">Enter Word To Convert:</label>
        <input type="text" name="word" id="word">

        <button type="submit" name="submit">Convert</button>
    </form>
    </div>
    
    
    <?php
    if(isset($_POST["submit"])){
        $word = $_POST["word"];

        $lower = strtolower($word);
        $upper = strtoupper($word);
        $firstlett = ucwords($word);

        echo "Original Text:{$word}";
        echo"<br>";
        echo "Text in UpperCase:{$upper}";echo"<br>";
        echo "Text in LowerCase:{$lower}";echo"<br>";
        echo "Text with First letter Capital:{$firstlett}";
    }
    ?>
</body>
</html>
