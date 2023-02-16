<?php
 include './db.php';
 extract($_POST);
  $id = $_POST['hiddenId'];
  if(isset($_POST['name'])  && isset($_POST['email']) && isset($_POST['dept'])){

    $update = "UPDATE student Set name='$name', email='$email',dept='$dept'
    WHERE id = $id";
    $ex = mysqli_query($con,$update);

  }
?>