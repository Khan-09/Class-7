<?php
    // echo '<pre>';
    // print_r($_REQUEST);
    // echo '</pwe>';
    // echo $_REQUEST ['Name']. '<br>';
    // echo $_REQUEST ['Email'];   
    
    // echo strlen($_REQUEST ['Name']);
$name =  strlen (trim ($_REQUEST ['Name']));
    if ($name > 50){
        echo "Write your Name in 50 character!";
    }else{
        echo "You're welcome!";
    }
?>

