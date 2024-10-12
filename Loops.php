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

    echo "Activity 1";
    echo "<br>";
    $number = 1;
    while ($number <= 20) {
        if ($number % 2 == 0) {
            echo $number ." ";
        }
        $number++;
    }

    
    echo "<br> <br>";

    echo "Activity 2";
    echo "<br>";
    $correctPassword = "password123";

    echo "<i>Will loop endlessly in browser, so I commented it out for now.<i>";

    // do {
    //     // echo "Please enter the password: ";
    //     $userPassword = readline("\nPlease enter the password: \n");
    //     if ($userPassword != "password123") {
    //         echo "Incorrect password.\n";
    //     }
    // } while ($userPassword != $correctPassword);
    // echo "Access Granted.\n";

    echo "<br> <br>";

    echo "Activity 3";
    echo "<br>";
    $multiplicand = 7;
    for ($i = 1; $i <= 10; $i++) {
        echo "7 x $i = " . $multiplicand * $i . "\n";
    }


    echo "<br> <br>";

    echo "Activity 4";
    echo "<br>";
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


    echo "<br> <br>";

    echo "Activity 5";
    echo "<br>";
    $addend = 1;
    $sum = 0;
    while ($addend <= 100) {
        $sum += $addend;
        $addend++;
    }
    echo "The sum of numbers from 1 to 100 is: $sum <br>";


    echo "<br> <br>";

    echo "Activity 6";
    echo "<br>";
    $movies = array("Avatar", "Avengers: Endgame", "Avatar: The Way of Water", "Titanic", "Star Wars: Episode VII - The Force Awakens");
    $i = 1;
    foreach ($movies as $movie) {
        echo $i . ". " . $movie . "\n";
        $i++;
    }


    echo "<br> <br>";

    echo "Activity 7";
    echo "<br>";
    $userInfo = array("Name" => "Alice", "Age" => 20, "Grade" => "A", "City" => "Baguio");
    foreach ($userInfo as $info => $value) {
        echo $info . ": " . $value . "<br>";
    }


    echo "<br> <br>";

    echo "Activity 8";
    echo "<br>";
    $numberFactor = 5;
    $factorial = 1;
    
    for ($i = $numberFactor; $i > 0; $i--) {
        $factorial = $factorial * $i;
    }
    echo "The factorial of ". $numberFactor . " is: ". $factorial . "<br>";


    echo "<br> <br>";

    echo "Activity 9";
    echo "<br>";
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


    echo "<br> <br>";

    echo "Activity 10<br>";
    
    $userNumber = (int)readline("Enter a number: <br>");
    if ($userNumber  <= 1) {
        echo $userNumber . " is not a prime number. <br>";
    }

    if ($userNumber  == 2 | $userNumber  == 3) {
        echo $userNumber . " is a prime number. <br>";
    }

    for ($i = 2; $i <= sqrt($userNumber); $i++) {     
        if ($userNumber % $i == 0) {
            echo $userNumber . " is not a prime number. <br>";
            break;
        } else {
            echo $userNumber . " is a prime number. <br>";
            break;
        }
    }


    echo "<br> <br>";

    echo "Activity 11<br>";
    $subsequentNumber = 1;
    $sum = 0;
    $i = 1;
    while ($i <= 5) {
        echo $sum . " ";
        $sum += $subsequentNumber;
        echo $subsequentNumber . " ";
        $subsequentNumber = $sum + $subsequentNumber;
        $i++;
    }


    echo "<br> <br>";

    echo "Activity 12<br>";
    // $userString = (String)readline("Input: <br>");
    $userString = "palindrome";
    $reversedString = "";
    for ($i = strlen($userString) - 1; $i >= 0; $i--) {
        $reversedString .= $userString[$i];
    }
    echo "Output: " . $reversedString . "<br>";
    ?>
</body>
</html>