<?php

  require 'config.php';

  if(isset($_POST["login"])){
    $id = $_POST["id"];
    $password = $_POST["password"];

    if($id=="admin"){
      if($password=="admin"){
        $_SESSION["id"] = $id;
        header("Location: adminDash.php");
      }
      else{
        echo "<script> alert('Wrong Password!') </script>";
      }
    }
    else{
      $result = mysqli_query($conn, "SELECT * FROM `login` WHERE id='$id'");
      $row = mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
          //$_SESSION["login"] = true;
          $_SESSION["id"] = $id;
          header("Location: userDash.php");
        }
        else{
          echo "<script> alert('Wrong Password!') </script>";
        }
      }
      else{
        echo "<script> alert('User Not Registered!') </script>";
      }
    }

  }
?>






<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <style>
    .roboto{
      font-family: "Roboto", sans-serif;
      font-weight: 500;
    }
    .white{
      color: white;
    }
  </style>
</head>
<body class="bg-sky-100 roboto">
  <header>
    <div class="ml-[620px] pt-10">
      <img class="w-[250px] h-[100px] " src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt="">
    </div>
  </header>
  <main>
    <div class="flex flex-row justify-center space-x-10  mt-8 mr-36 mb-28 ml-80 max-w-2xl h-max rounded-2xl shadow-2xl bg-sky-500">
      <div>
        <img class="rounded-2xl nded rounded-r-none w-full h-full " src="Images/mu(11).png" alt="">
      </div>
      <div class="pr-16 pb-5">
        <h1 class="roboto white font-extrabold text-center text-2xl mt-10 mb-5">Welcome!!</h1>
        <form class="space-y-2" action="" method="post">
          <input class="p-1 rounded-2xl placeholder:p-2 outline-none" type="text" name="id" id="id" placeholder="Enter Your ID">
          <input class="p-1 rounded-2xl placeholder:p-2 outline-none " type="password" name="password" id="password" placeholder="Enter Password">
                
          <!-- <p class="ml-12 mb-10 white text-sm">Forgot password?</p> -->
          <a href=""><button class="bg-blue-600 hover:bg-blue-800 p-2 rounded-xl white mt-5 ml-14 mb-3" name="login" id="login">Login</button></a>
          <h3 class="text-white mb-20 ml-5">New user? <span><a class="text-cyan-50 text-lg" href="rgister1.php">Register</a></span> </h3>
        </form>  



      </div>
    </div>
  </main>
  <footer>

  </footer>
</body>
</html>