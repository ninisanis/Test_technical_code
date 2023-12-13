<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Result: </h1>
</body>

</html>
<?php

function isPrime($num)
{
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $input = $_POST['input'];
    $length = strlen($input);

    if (isset($_POST['segitiga'])) {
        for ($i = 0; $i < $length; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo "0";
            }
            echo substr($input, $i, 1) . "<br>";
        }
    } else if (isset($_POST['Ganjil'])) {
        for ($i = 1; $i <= $input; $i += 2) {
            echo $i . "<br>";
        }
    } else if (isset($_POST['prima'])) {
        for ($i = 0; $i <= $input; $i++) {
            if (isPrime($i)) {
                echo $i . "<br>";
            }
        }
    }
}
