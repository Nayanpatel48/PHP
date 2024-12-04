<?php
    //an array stores multiple values in single variable

    //Types of arrays i php
    //1.Indexed arrays = array with numerical index
    //2.Associative arrays = arrays with named keys
    //3.multidimensional arrays = array counting one or more arrays

    //&&&&&&&&&&&&&&&&&&&&&&&&&&&&&Indexed arrays
    $array = array("Nayan", "mayan", "sona", "bana");
    //var_dump($array);
    //output will demonstrate that $array is an indexed array

    //accessing indexed arrays
    //echo "first element of array is $array[0]\n";

    //changing value in indexed arrays
    // echo "Before change:\n";
    // var_dump($array);
    // $array[0] = "xyz";
    // $array[2] = "cvb";
    // echo "After change:\n";
    // var_dump($array);

    //looping through the indexed array
    // foreach($array as $a){
    //     echo "$a ";
    // }
    // echo "\n";

    //&&&&&&&&&&&&&&&&&&&&&&&&&&&&Associative arrays
    $neta = array("a"=>"Subhash Chandrabhoze", "b"=>"Modiji", "c"=>"Rahul Gandhi");
    //looping
    // foreach($neta as $n){
    //     echo "$n ";
    // }
    // echo "\n";

    //updating array elements
    // echo "Before updation:\n";
    // var_dump($neta);
    // $neta["a"] = "Peter Griffin";
    // echo "After updation:\n";
    // var_dump($neta);

    //accessing any specific array element 
    // echo $neta["b"];
    // echo "\n";

    //multidimensional array
    $multiDArray=array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    );
    // echo $multiDArray[0][1];//2
    // echo "\n";
?>