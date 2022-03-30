<?php

require("header.php");

if(isset($_REQUEST["send"])){
    if(!empty($_REQUEST["s_username"])){
        $s_username = $_REQUEST["s_username"];

        if(!empty($_REQUEST["t_username"])){
            $t_username = $_REQUEST["t_username"];

            if(!empty($_REQUEST["topic"])){
                $topic = $_REQUEST["topic"];

                if(!empty($_REQUEST["message"])){
                    $message = $_REQUEST["message"];

                    $file = fopen("../models/studentMessageList.txt", "a");
                                            
                    $content = "\r\n". $s_username ."|" .$t_username ."|" .$topic ."|" .$message;             
                    fwrite($file, $content);
                    fclose($file);
                    header("location: ../views/student/studentTeacher.php");
                }
                else{
                    echo "Message is null!";
                }
    
            }
            else{
                echo "Topic is null!";
            }

        }
        else{
            echo "Teacher Username is null!";
        }
    }
    else{
        echo "Student Username is null!";
    }
}
?>