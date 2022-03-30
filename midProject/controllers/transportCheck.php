<?php

require("header.php");

if(isset($_REQUEST["send"])){
    if(!empty($_REQUEST["username"])){
        $username = $_REQUEST["username"];

        if(!empty($_REQUEST["name"])){
            $name = $_REQUEST["name"];

            if(!empty($_REQUEST["email"])){
                $email = $_REQUEST["email"];

                if(!empty($_REQUEST["phone"])){
                    $phone = $_REQUEST["phone"];
                    $pickup = $_REQUEST["pickup"];

                    $file = fopen("../models/reqTransportList.txt", "a");
                                            
                    $content = "\r\n". $username ."|" .$name ."|" .$email ."|" .$phone."|" .$pickup;             
                    fwrite($file, $content);
                    fclose($file);
                    header("location: ../views/student/studentApplication.php");
                }
                else{
                    echo "Phone is null!";
                }
    
            }
            else{
                echo "Email is null!";
            }

        }
        else{
            echo "Name is null!";
        }
    }
    else{
        echo "Username is null!";
    }
}
?>