<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Age Calculate</title>
</head>

<body>
    <div class="navbar">
        <a href="index.php">Form</a>
        <a href="agecalculate.php">Age Calculate</a>
        <a href="calculate.php">Calculate</a>
    </div>

    <h2>Calculate your age</h2>
    <form method="post">
        <label for="birthdate">Date of birth:</label>
        <input type="date" id="birthdate" name="birthdate" required>
        <button type="submit">Calculate</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $birthdate = $_POST['birthdate'];
        $birthDate = new DateTime($birthdate);
        $currentDate = new DateTime();

        $interval = $currentDate->diff($birthDate);

        $years = $interval->y;
        $months = $interval->m + ($years * 12);
        $days = $interval->days;

        echo "<h3>Resulte:</h3>";
        echo "<p>Age in years: $years year</p>";
        echo "<p>Age in months: $months month</p>";
        echo "<p>Age in days: $days day</p>";
    }
    ?>
</body>

</html>