<?php

session_start();

if(isset($_REQUEST["login"])){
    
    $user = $_REQUEST["users"];
    if(!empty($_REQUEST["username"])){
        $username = $_REQUEST["username"];

        if(!empty($_REQUEST["password"])){
            $password = $_REQUEST["password"];

            if($user == "admin"){
                $file = fopen("../models/adminList.txt", "r");
    
                while(!feof($file)){
                    $user = fgets($file);
    
                    $userArray = explode("|", $user);
    
                    if(trim($userArray[1]) == $username && trim($userArray[8]) == $password){
    
                        //Using setcookie method
                        setcookie("status", "true", time()+3600, "/");
                        setcookie("loggedName", $username, time()+3600, "/");
    
                        //Using session method
                        $_SESSION["status"] = "true";
    
                        header("location: ../views/adminHome.php");
                    }
                }
                echo "Invalid username/password!";
            }
    
            if($user == "teacher"){
                $file = fopen("../models/verTeacherList.txt", "r");
    
                while(!feof($file)){
                    $user = fgets($file);
    
                    $userArray = explode("|", $user);
    
                    if(trim($userArray[1]) == $username && trim($userArray[8]) == $password){
    
                        //Using setcookie method
                        setcookie("status", "true", time()+3600, "/");
                        setcookie("loggedName", $username, time()+3600, "/");
    
                        //Using session method
                        //$_SESSION["status"] = "true";
    
                        header("location: ../views/teacherHome.php");
                    }
                }
                echo "Invalid username/password!";
            }
    
            if($user == "student"){
                $file = fopen("../models/verStudentList.txt", "r");
    
                while(!feof($file)){
                    $user = fgets($file);
    
                    $userArray = explode("|", $user);
    
                    if(trim($userArray[1]) == $username && trim($userArray[8]) == $password){
    
                        //Using setcookie method
                        setcookie("status", "true", time()+3600, "/");
                        setcookie("loggedName", $username, time()+3600, "/");
    
                        //Using session method
                        //$_SESSION["status"] = "true";
    
                        header("location: ../views/studentHome.php");
                    }
                }
                echo "Invalid username/password!";
            }

    }
    else{
        echo "Password is null!";
    }
    




    /*
    $user = $_REQUEST["users"];
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    if($user != null && $username != null && $password != null){

        if($user == "admin"){
            $file = fopen("../models/adminList.txt", "r");

            while(!feof($file)){
                $user = fgets($file);

                $userArray = explode("|", $user);

                if(trim($userArray[1]) == $username && trim($userArray[8]) == $password){

                    //Using setcookie method
                    setcookie("status", "true", time()+3600, "/");
                    setcookie("loggedName", $username, time()+3600, "/");

                    //Using session method
                    $_SESSION["status"] = "true";

                    header("location: ../views/adminHome.php");
                }
            }
            echo "Invalid username/password!";
        }

        if($user == "teacher"){
            $file = fopen("../models/teacherList.txt", "r");

            while(!feof($file)){
                $user = fgets($file);

                $userArray = explode("|", $user);

                if(trim($userArray[1]) == $username && trim($userArray[8]) == $password){
                    setcookie("status", "true", time()+3600, "/");
                    header("location: ../views/teacherHome.php");
                }
            }
            echo "Invalid username/password!";
            
        }

        if($user == "student"){
            $file = fopen("../models/studentList.txt", "r");

            while(!feof($file)){
                $user = fgets($file);

                $userArray = explode("|", $user);

                if(trim($userArray[1]) == $username && trim($userArray[8]) == $password){
                    setcookie("status", "true", time()+3600, "/");
                    header("location: ../views/studentHome.php");
                }
            }
            echo "Invalid username/password!";
            
        }
    }

    else{
        echo "Null username/password";
    }

    */
}
else{
    echo "Username is null!";
}

}

?>