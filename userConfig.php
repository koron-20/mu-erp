<?php
    if(!empty($_SESSION['id'])){
        $id = $_SESSION["id"];
    
        $result = mysqli_query($conn, "SELECT * FROM `login` WHERE id='$id'");
        $row = mysqli_fetch_assoc($result);
      }
      else{
        header("Location: login.php");
      }
?>