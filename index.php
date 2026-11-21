
<?php
$fields = [
    "name" => "Your name is ",
    "dob" => "Your date of birth is ",
    "color" => "Your favorite color is ",
    "place" => "Your favorite place to visit is ",
    "nickname" => "Your nickname is "
];

$results = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($fields as $key => $label) {
        $value = trim($_POST[$key] ?? "");

        if ($value != "") {
            $results[] = $label . htmlspecialchars($value);
                } else {
            $messages = [
                "name" => "You didn't enter a name.",
                "dob" => "You didn't enter a date of birth.",
                "color" => "You didn't enter a favorite color.",
                "place" => "You didn't enter a favorite place to visit.",
                "nickname" => "You didn't enter a nickname."
            ];

            $results[] = $messages[$key];
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Jeremy Dean Wk 2 Performance Assessment</title>
</head>
<body>

<h1>Jeremy Dean Wk 2 Performance Assessment</h1>

<form method="POST" action="">
    <label>Enter your name:</label><br>
    <input type="text" name="name"><br><br>

    <label>Enter your date of birth:</label><br>
    <input type="date" name="dob"><br><br>

    <label>Enter your favorite color:</label><br>
    <input type="text" name="color"><br><br>

    <label>Enter your favorite place to visit:</label><br>
    <input type="text" name="place"><br><br>

    <label>Enter your nickname:</label><br>
    <input type="text" name="nickname"><br><br>

    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Submitted Information</h2>";
    var_dump($_POST);

    foreach ($results as $result) {
        echo "<p>" . $result . "</p>";
    }
}
?>

</body>
</html>
