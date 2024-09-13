<html>
    <head>
        <title>Using Functions</title>
        <style>

        </style>
    </head>
    <body>
        <h1>Using Functions</h1>
        <?php

        // BUILT-IN FUNCTION
        // phpinfo();
        
        $myString = "This is a new string";
        $uppercase = "THIS IS A NEW VARIABLE";

        $convertedString = strtoupper($myString);

        $lowercase = strtolower($uppercase);

        echo $convertedString . "<br>";
        echo $lowercase . "<br>";

        $myArray = array("A","B","C","D");

        $pushedArray = array_push($myArray, "E");

        echo print_r($myArray) . "<br>";

        $poppedArray = array_pop($myArray);

        echo print_r($myArray) . "<br>";

        array_pop($myArray);

        echo print_r($myArray) . "<br>";

        // BUILT-IN FUNCTIONS 
        //  DATE FUNCTION
        
        echo date('l') ."<br>";

        echo(date(" l dS \of F Y h :i :s A ")) ."<br>";

        // TIME FUNCTION
        echo 'The time is:' . time() .'<br>'; //returns a timestamp
        echo (date("h :i :s A")) ."<br>";


        // CALENDAR FUNCTION
        $d = cal_days_in_month(CAL_GREGORIAN,12,2012);
        echo($d) ."<br>";

        $calinfo = cal_info(0);
        echo print_r($calinfo) ."<br>";

        //USER DEFINED FUNCTIONS
        function greet(){
            echo "Good Afternoon" ."<br>";
        }

        // we invoke the function here
        greet();


        function fix_names($n1, $n2, $n3){

            $n1 = strtoupper($n1);
            $n2 = strtoupper($n2);
            $n3 = strtoupper($n3);

            return $n1 . " " . $n2 . " " . $n3;
        }

        echo fix_names("welcome" , "to", "nigeria") ."<br>";

        // PASSING ARGUMENTS BY VALUE
        function add($num)
        {
            $num = $num + 2;
        }

        $num = 2;

        add($num);

        echo $num . "<br>";

        // PASSING ARGUMENTS BY REFERENCE
        function addNum(&$num)
        {
            $num = $num + 2;
        }

        $num = 2;
        addNum($num);
        echo $num; 



        ?>
    </body>
</html>
