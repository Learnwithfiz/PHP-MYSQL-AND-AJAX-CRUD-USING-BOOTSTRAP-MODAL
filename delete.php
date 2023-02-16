<?php
 include './db.php';
 extract($_GET);
 $id = $_GET['id'];
 $delete = "DELETE FROM student WHERE id= $id";
 $query = mysqli_query($con,$delete)
?>