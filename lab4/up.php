<?php
if(isset($_POST["SubmitBtn"])){

  $fileName=$_FILES["resume"]["name"];
  $fileTmpName=$_FILES["resume"]["tmp_name"];

    $uploadPath= "bosseiei.csv";
      //function for upload file
    unlink("bosseiei.csv");
    if(move_uploaded_file($fileTmpName,$uploadPath)){
        echo 'Successful<a href="index.php">Click Here</a>';
      }
    else{
        echo "You can only upload a Word doc file.";
     }
}
?>