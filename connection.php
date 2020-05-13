<?php
    $connection= new mysqli("localhost","Yasinpatel","yasinpa7","MARATHON");
    if($connection -> connect_errno){
        echo "Fail To Connect With Php!".$connection -> connect_error;
        exit();
    }
?>