<?php

require("header.php");

if(isset($_REQUEST["apply"])){
    if(!empty($_REQUEST["s_username"])){
        $s_username = $_REQUEST["s_username"];

        if(!empty($_REQUEST["t_username"])){
            $t_username = $_REQUEST["t_username"];

            if(!empty($_REQUEST["email"])){
                $email = $_REQUEST["email"];

                if(!empty($_REQUEST["phone"])){
                    if(!empty($_REQUEST["message"])){
                        $message = $_REQUEST["message"];
    
                        $file = fopen("../models/studentLeaveApplyList.txt", "a");
                                                
                        $content = "\r\n". $s_username ."|" .$t_username ."|" .$email ."|" .$phone ."|" .$message;             
                        fwrite($file, $content);
                        fclose($file);
                        header("location: ../views/student/studentApplication.php");
                    }
                    else{
                        echo "Message is null!";
                    }
                }
                else{
                    echo "Phone is null!";
                }
    
            }
            else{
                echo "email is null!";
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