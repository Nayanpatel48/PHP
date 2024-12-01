<?php
    //printing statement
    // "\n" for next line
    // echo "My name is Nayan\n";

    //php doesn't have case sensitivity means "echo" is equal to "Echo"
    // Echo "Same output\n";
    // ecHo "Same output\n";
    // echO "Same output\n";

    //Important Note : All php variables are case sensitive
    //As you can see from below that both "color" & "Color" are different gives different output.
    // $color = "White";
    // $Color = "Blue"; //data type is STRING
    // $colorPrize = 780;//data type is INTEGER
    // echo "My house color is ".$color."\n";
    // echo "My house color is ".$Color."\n";

    //this is single line comment
    #this is also single-line comment
    /*
        This is multiline comment
    */

    /*php is the loosely typed language means we will not explicitly tell the data type of the variable
    but rather it automatically detect the data type of variable
    */

    //php supports STRING, INTEGER, FLOAT also called DOUBLE, BOOLEAN, ARRAY, OBJECT, NULL, RESOURCE

    //get the data type using -> var_dump ( variable ) function
    // echo "Data type of variable colorPrize is".var_dump($colorPrize)."\n";

    //you can assign same value to the multiple variables
    // $x=$y=$z=99;
    // echo "x=".$x.", y=".$y.", z=".$z."\n";

    //php variables scope

    //variable with ===global scope===
    //NOTE : The variable declared outside the function has a global space & can 
    //only accessed outside the function not inside.
    //"global is the keyword used to access the global variable inside the function"
    // $z=67;
    // function myTest(){
    //     global $z;
    //     echo "Variable x inside function is: $z\n";
    //     echo "Printed x inside function using global keyword: $z\n";
    // }
    // myTest();
    // echo "Variable x inside function is: $z\n";
    //note that here i can access the variable z only outside the function not inside
    //php stores all global variables in an array called $GLOBALS[index]. The index holds
    //the name of the variable

    // echo "$GLOBALS[$z]";

    //variable with ===local scope===
    //NOTE: The variable declared inside the function has local scope only & can only be 
    //accessed inside the function
    // function testTwo(){
    //     //declaring variable inside scope of testTwo() function 
    //     $t=67;
    //     echo "(inside function)Variable t has value $t\n";
    // }
    // echo "(outside function)Variable t has value $t\n";
?>