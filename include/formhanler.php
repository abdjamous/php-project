<?php

//var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $options = htmlspecialchars($_POST["options"]);

    $file = fopen('info.txt', 'a');

    if (empty($firstName)) {
        exit();
        header("Location: ../index.php");
    }

    echo "the data is:";
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $options;
    echo "<br>";

    if ($file) {
        foreach ($_POST as $key => $value) {

            fwrite($file, "$key: $value\n");
        }
        fwrite($file, "------------------------\n"); // إضافة فاصل بين كل مجموعة من البيانات

        fclose($file);
    } else {
        echo "Error";
    }

    header("Location: ../index.php");
} else {
    header("Location: ../index.php");
}
