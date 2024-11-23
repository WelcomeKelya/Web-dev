<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Transformation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f9;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #ffffff;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #4CAF50;
        }

        .output {
            margin-top: 20px;
            padding: 10px;
            background: #e6f7ff;
            border: 1px solid #91d5ff;
            border-radius: 5px;
            color: #333;
            font-size: 16px;
            line-height: 1.6;
        }

        .output span {
            font-weight: bold;
            color: #0073e6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PHP String Transformation</h1>
        <div class="output">
            <?php
            $inputString = "hello World! PHP is fun.";

            $uppercaseString = strtoupper($inputString);
            echo "<span>a) Uppercase:</span> " . $uppercaseString . "<br>";

            $lowercaseString = strtolower($inputString);
            echo "<span>b) Lowercase:</span> " . $lowercaseString . "<br>";

            $firstCharUppercase = ucfirst(strtolower($inputString));
            echo "<span>c) First Character Uppercase:</span> " . $firstCharUppercase . "<br>";

            $wordsUppercase = ucwords(strtolower($inputString));
            echo "<span>d) First Character of Each Word Uppercase:</span> " . $wordsUppercase . "<br>";
            ?>
        </div>
    </div>
</body>
</html>
