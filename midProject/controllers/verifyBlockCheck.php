<?php

require("header.php");

if(isset($_REQUEST["confirm"])){

    $user = $_REQUEST["users"];

    if(!empty($_REQUEST["username"])){
        if(strlen($_REQUEST["username"]) >= 2){
            $username = $_REQUEST["username"];

            if(!empty($_REQUEST["name"])){
                $name = $_REQUEST["name"];

                if(!empty($_REQUEST["email"])){
                    $email = $_REQUEST["email"];

                    if(!empty($_REQUEST["phone"])){
                        if(strlen($_REQUEST["phone"]) == 11){
                            $phone = $_REQUEST["phone"];

                            if(!empty($_REQUEST["dob"])){
                                $dob = $_REQUEST["dob"];

                                if(!empty($_REQUEST["gender"])){
                                    $gender = $_REQUEST["gender"];

                                    if(!empty($_REQUEST["address"])){
                                        $address = $_REQUEST["address"];

                                        if(!empty($_REQUEST["password"])){
                                            if(!empty($_REQUEST["cPassword"])){
                                                if($_REQUEST["password"] == $_REQUEST["cPassword"]){
                                                    $password = $_REQUEST["password"];
                                                    $confirmPass = $_REQUEST["cPassword"];

                                                    /*
                                                    if($user == "admin"){
                                                        $file = fopen("../models/adminList.txt", "a");
                                            
                                                        $content = "\r\n". $user ."|". $username ."|". $name ."|". $email ."|". $phone ."|". $dob ."|". $gender ."|". $address ."|". $password ."|". $confirmPass."|unverified";
                                            
                                                        fwrite($file, $content);
                                                        fclose($file);
                                                        header("location: ../views/login.php");
                                                    }
                                                    */
                                            
                                                    if(!empty($_REQUEST["action"])){
                                                        if($_REQUEST["action"] == "verify"){
                                                            if($_REQUEST["users"] == "teacher"){
                                                                $file = fopen("../models/verTeacherList.txt", "a");
                                                    
                                                                $content = "\r\n". $user ."|". $username ."|". $name ."|". $email ."|". $phone ."|". $dob ."|". $gender ."|". $address ."|". $password ."|". $confirmPass."|verified";
                                                    
                                                                fwrite($file, $content);
                                                                fclose($file);
                                                                echo "Teacher has been verified!";
                                                            }
                                                            if($_REQUEST["users"] == "student"){
                                                                $file = fopen("../models/verStudentList.txt", "a");
                                                    
                                                                $content = "\r\n". $user ."|". $username ."|". $name ."|". $email ."|". $phone ."|". $dob ."|". $gender ."|". $address ."|". $password ."|". $confirmPass."|verified";
                                                    
                                                                fwrite($file, $content);
                                                                fclose($file);
                                                                echo "Student has been verified!";
                                                            }
                                                        }
                                                        if($_REQUEST["action"] == "block"){
                                                            if($_REQUEST["users"] == "teacher"){
                                                                $file = fopen("../models/verTeacherList.txt", "a");
                                                    
                                                                $content = "\r\n". $user ."|". $username ."|". $name ."|". $email ."|". $phone ."|". $dob ."|". $gender ."|". $address ."|". $password ."|". $confirmPass."|blocked";
                                                    
                                                                fwrite($file, $content);
                                                                fclose($file);
                                                                echo "Teacher has been blocked!";
                                                            }
                                                            if($_REQUEST["users"] == "student"){
                                                                $file = fopen("../models/verStudentList.txt", "a");
                                                    
                                                                $content = "\r\n". $user ."|". $username ."|". $name ."|". $email ."|". $phone ."|". $dob ."|". $gender ."|". $address ."|". $password ."|". $confirmPass."|blocked";
                                                    
                                                                fwrite($file, $content);
                                                                fclose($file);
                                                                echo "Student has been blocked!";
                                                            }
                                                        }
                                                    }
                                                    else{
                                                        echo "Action is null!";
                                                    }


                                                    /*
                                                    if($user == "student"){
                                                        $file = fopen("../models/studentList.txt", "a");
                                            
                                                        $content = "\r\n". $user ."|". $username ."|". $name ."|". $email ."|". $phone ."|". $dob ."|". $gender ."|". $address ."|". $password ."|". $confirmPass."|unverified";
                                            
                                                        fwrite($file, $content);
                                                        fclose($file);
                                                        header("location: ../views/login.php");
                                                    }
                                                    */

                                                }
                                                else{
                                                    echo "Passwords does not match!";
                                                }
                                            }
                                            else{
                                                echo "cPassword is null!";
                                            }
                                        }
                                        else{
                                            echo "Password is null!";
                                        }
                                    }
                                    else{
                                        echo "Address is null!";
                                    }
                                }
                                else{
                                    echo "Gender is null!";
                                }
                            }
                            else{
                                echo "Date of Birth is null";
                            }
                        }
                        else{
                            echo "Invalid phone number, Please enter a 11 digit phone number!";
                        }
                    }
                    else{
                        echo "Phone number is null!";
                    }
                }
                else{
                    echo "Email is null!";
                }
            }
            else{
                echo "Name is null";
            }
        }
        else{
            echo "Invalid username, Must contain at least 2 letter!";
        }
    }
    else{
        echo "Username is null!";
    }
}

?>