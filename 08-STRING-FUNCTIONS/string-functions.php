<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Using String Functions</h1>
    <?php
        $lengthy = "Lengthy string for you";
        $text   = "\t\tThese are a few words...";
        $trimmed = trim($text);
       // $rest = substr("abcdef", 0, -1);  // returns "abcde"
        $text2 = 'This is a test';
        echo strlen($text) . "<br>";
        //echo strlen($text); // 14
        
        //echo $trimmed . "<br>";
       // echo "The length of the string is:" . strlen($lengthy) . "<br>";

        // Provides: Hll Wrld f PHP
        $vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
        $onlyconsonants = str_replace($vowels, "A", $lengthy);

    echo $onlyconsonants . "<br>";

    echo strrev("Hello world!") ."<br>";


        $pizza  = "pepperoni mozarella chicken vegetable spicy suya";
        $pieces = explode(" ", $pizza);
    
        print_r($pieces);

        // echo $pieces[0] ."<br>"; 

        // echo $pieces[1]; 
       // piece2

    // $array = ['lastname', 'email', 'phone'];
    //   var_dump(implode("+", $array)); 
    
    $n = 10;
    printf("%%b = '%b'\n", $n); // binary representation
      //  printf("%%c = '%c'\n", $c); // print the ascii character, same as chr() function

        $text = "\t\tThese are a few words :) ...  ";
    ?>
</body>
</html>