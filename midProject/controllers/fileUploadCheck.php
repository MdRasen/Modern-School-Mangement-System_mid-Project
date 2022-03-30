<?php

    require("header.php");

    if(isset($_REQUEST["submit"])){
       
        //File upload starts//

        $src = $_FILES["myfile"] ["tmp_name"];
        $des = "../models/uploads/".$_FILES["myfile"] ["name"];

        //print_r($_FILES["myfile"]);
        if(move_uploaded_file($src, $des)){
            echo "Success";
        }
        else{
            echo "Failed";
        }
        
        //File upload ends//
    }

?>