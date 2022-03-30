<?php

  require("header.php");

  if(isset($_REQUEST["upload"])){
      if(!empty($_REQUEST["class_id"])){

        $class_id = $_REQUEST["class_id"];
        $class = $_REQUEST["class"];
        $section = $_REQUEST["section"];

        $src = $_FILES["myfile"] ["tmp_name"];
        $des = "../models/uploads/".$_FILES["myfile"] ["name"];

        //print_r($_FILES["myfile"]);
        if(move_uploaded_file($src, $des)){
            echo "Success";
        }
        else{
            echo "Failed";
        }

      }

      else{
          echo "Class ID is Null!";
      }
  }

?>