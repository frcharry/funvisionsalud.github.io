<!DOCTYPE HTML>
<html>
<head>
    <title></title>
</head>
<body>
    <php?
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
    }
    echo "<h2>Your Input:</h2>";
    echo $name;
    ?>
</body>
</html>

