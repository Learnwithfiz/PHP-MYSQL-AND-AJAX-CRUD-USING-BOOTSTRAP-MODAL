<?php
   include './db.php';
   extract($_POST);

   if(isset($_POST['StName']) &&isset($_POST['StEmail'])
   &&isset($_POST['StDept'])){
    $insert = "INSERT INTO  student(name,email,dept) 
    VALUES('$StName','$StEmail','$StDept')";
    $query= mysqli_query($con,$insert);
   }
?>