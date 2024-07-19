<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Calculate</title>
</head>

<body>
    <div class="navbar">
        <a href="index.php">Form</a>
        <a href="agecalculate.php">Age Calculate</a>
        <a href="calculate.php">Calculate</a>
    </div>

    <h2>Calculate</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num01" placeholder="number one" required>
        <select name="operator" id="">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num02" placeholder="number two" required>
        <button>Calculate</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);

        // ERROR
        $errors = false;
        if (empty($num01) || empty($num02) || empty($operator)) {
            echo "<p class='calc-error'> Fill in all fields </p>";
            $errors = true;
        }

        if (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<p class='calc-error'> Only write numbers </p>";
            $errors = true;
        }

        if (!$errors) {
            $value = 0;
            switch ($operator) {
                case "add":
                    $value = $num01 + $num02;
                    break;
                case "subtract":
                    $value = $num01 - $num02;
                    break;
                case "multiply":
                    $value = $num01 * $num02;
                    break;
                case "divide":
                    $value = $num01 / $num02;
                    break;
                default:
                    echo "<p class='calc-error'> Somthing went wrong! </p>";
            }

            echo "<p> Result = " . $value . "</p>";
        }
    }
    ?>
</body>

</html>