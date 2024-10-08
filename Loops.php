<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "\nActivity 1\n";
    $number = 1;
    while ($number <= 20) {
        if ($number % 2 == 0) {
            echo $number ." ";
        }
        $number++;
    }

    // CLI line break
    echo "\n\n";

    echo "Activity 2\n";
    $correctPassword = "password123";
    do {
        // echo "Please enter the password: ";
        $userPassword = readline("\nPlease enter the password: \n");
        if ($userPassword != "password123") {
            echo "Incorrect password.\n";
        }
    } while ($userPassword != $correctPassword);
    echo "Access Granted.\n";
    ?>
</body>
</html>