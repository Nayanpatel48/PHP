<?php
    //using fopen() function to open a file pointer for writting.
    //using fwite to write data to the file.

    //open a file for reading
    $handle = fopen("one.txt","r");
    //Read data from the file
    while(($line = fgets($handle)) !== false){
        echo "$line\n";
    }
    //close the file handle
    fclose($handle);

    //open a file for writting 
    $handle = fopen("one.txt","w");
    //write data to the file
    fwrite($handle, "Hello world!");
    //close the file handle
    fclose($handle);
?>