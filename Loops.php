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
    echo "\n\n\n";

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

    // CLI line break
    echo "\n\n";

    echo "Activity 3\n";
    $multiplicand = 7;
    for ($i = 1; $i <= 10; $i++) {
        echo "7 x $i = " . $multiplicand * $i . "\n";
    }

    // CLI line break
    echo "\n\n";

    echo "Activity 4\n";
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 5) {
            continue;
        } elseif ($i == 8) {
            echo $i;
            break;
        } else {
            echo $i . " ";
        }
    }

    // CLI line break
    echo "\n\n\n";

    echo "Activity 5\n";
    $addend = 1;
    $sum = 0;
    while ($addend <= 100) {
        $sum += $addend;
        $addend++;
    }
    echo "The sum of numbers from 1 to 100 is: $sum \n";
    
    ?>
</body>
</html>