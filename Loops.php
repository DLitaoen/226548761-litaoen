<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    <?php

    // https://primus-r.notion.site/Loops-83ee14b7653c47fd95d9f80348350c82

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

    // CLI line break
    echo "\n\n";

    echo "Activity 6\n";
    $movies = array("Avatar", "Avengers: Endgame", "Avatar: The Way of Water", "Titanic", "Star Wars: Episode VII - The Force Awakens");
    $i = 1;
    foreach ($movies as $movie) {
        echo $i . ". " . $movie . "\n";
        $i++;
    }

    // CLI line break
    echo "\n\n";

    echo "Activity 7\n";
    $userInfo = array("Name" => "Alice", "Age" => 20, "Grade" => "A", "City" => "Baguio");
    foreach ($userInfo as $info => $value) {
        echo $info . ": " . $value . "\n";
    }

    // CLI line break
    echo "\n\n";

    echo "Activity 8\n";
    $numberFactor = 5;
    $factorial = 1;
    
    for ($i = $numberFactor; $i > 0; $i--) {
        $factorial = $factorial * $i;
    }
    echo "The factorial of ". $numberFactor . " is: ". $factorial . "\n";

    // CLI line break
    echo "\n\n";

    echo "Activity 9\n";
    for ($i = 1; $i <= 50; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz ";
        } elseif ($i % 3 == 0) {
            echo "Fizz ";
        } elseif ($i % 5 == 0) {
            echo "Buzz ";
        } else {
            echo $i . " ";
        }
    }

    // CLI line break
    echo "\n\n\n";

    echo "Activity 10\n";
    
    $userNumber = (int)readline("Enter a number: \n");
    if ($userNumber  <= 1) {
        echo $userNumber . " is not a prime number. \n";
    }
    
    if ($userNumber  == 2 | $userNumber  == 3) {
        echo $userNumber . " is a prime number. \n";
    }

    for ($i = 2; $i <= sqrt($userNumber); $i++) {     
        if ($userNumber % $i == 0) {
            echo $userNumber . " is not a prime number. \n";
            break;
        } else {
            echo $userNumber . " is a prime number. \n";
            break;
        }
    }

    
    ?>
</body>
</html>