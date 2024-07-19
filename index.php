<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PHP cource</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <div class="navbar">
    <a href="index.php">Form</a>
    <a href="agecalculate.php">Age Calculate</a>
    <a href="calculate.php">Calculate</a>
  </div>


  <table>
    <h2>Form</h2>
    <form action="include/formhanler.php" method="post">
      <tr>
        <td><label for="firstName">First Name:</label></td>
        <td><input type="text" id="firstName" name="firstName" /></td>
      </tr>
      <tr>
        <td><label for="lastName">Last Name:</label></td>
        <td><input type="text" id="lastName" name="lastName" /></td>
      </tr>
      <tr>
        <td><label for="options">Options:</label></td>
        <td>
          <select id="options" name="options">
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
            <option value="option4">Option 4</option>
          </select>
        </td>
      </tr>
      <tr>
        <td colspan="2"><button type="submit">Submit</button></td>
      </tr>
    </form>
  </table>



</body>

</html>