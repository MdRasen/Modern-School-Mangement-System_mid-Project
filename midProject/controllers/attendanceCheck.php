<?php

    require("header.php");

    $username = $_REQUEST["username"];
    $action = $_REQUEST["action"];
    $date = date("Y-m-d");

    if($action == "present"){
        $file = fopen("../models/attendance/$date._PresentList.txt", "a");
                                            
        $content = "\r\n".$username;             
        fwrite($file, $content);
        fclose($file);

        //echo "Ok!";
        header("location: ../views/teacher/tTakeAttendance.php");
    }
    if($action == "absent"){

        $file = fopen("../models/attendance/$date._AbsentList.txt", "a");
                                            
        $content = "\r\n".$username;             
        fwrite($file, $content);
        fclose($file);

        //echo "Ok!";
        header("location: ../views/teacher/tTakeAttendance.php");

    }
    

?>