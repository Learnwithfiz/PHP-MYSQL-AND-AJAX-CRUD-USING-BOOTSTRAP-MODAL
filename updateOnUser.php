<?php
 include './db.php';
 extract($_GET);
 $id = $_GET['id'];
 $select = "SELECT * FROM student WHERE id=$id";
 $ex = mysqli_query($con,$select);
 $row = mysqli_fetch_array($ex);
 $res = array();
 $res =  $row;
 echo json_encode($res);

?>