<?php

  require 'config.php';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $password = $_POST["password"];

    if($id=="admin"){
      if($password=="admin"){
        $_SESSION["id"] = "admin";
        header("Location: adminDash.php");
      }
      else{
        echo "<script> alert('Wrong Password!'); window.location.href = 'login.php'; </script>";
      }
    }
    else{
      $result = mysqli_query($conn, "SELECT * FROM `login` WHERE id='$id'");
      $row = mysqli_fetch_assoc($result);
      if(mysqli_num_rows($result) > 0){
        if($password == $row["password"]){
          //$_SESSION["login"] = true;
          $_SESSION["id"] = $id;
          // echo "<script> alert('Login Successful!'); window.location.href = 'userDash.php'; </script>";
          header("Location: userDash.php");
        }
        else if(empty($password)){
          echo "<script> alert('Password cannot be empty!'); window.location.href = 'login.php'; </script>";
        }
        else{
          echo "<script> alert('Wrong Password!'); window.location.href = 'login.php'; </script>";
        }
      }
      else if(empty($id)){
        echo "<script> alert('Id cannot be empty!'); window.location.href = 'login.php'; </script>";
      }
      else if(empty($password)){
        echo "<script> alert('Password cannot be empty!'); window.location.href = 'login.php'; </script>";
      }
      else{
        echo "<script> alert('User Not Registered!'); window.location.href = 'login.php'; </script>";
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
    <div class="visible lg:hidden space-y-3">
        <div class="ml-20  pt-10">
          <img class="w-[250px] h-[100px] " src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt="">
        </div>
        <div class="flex flex-col lg:invisible space-y-0 w-[300px] h-[450px] ml-14 mt-0 rounded-2xl shadow-2xl bg-sky-500">
          <div>
            <img class="rounded-2xl rounded-b-none w-full h-full " src="Images/logoResponse.png" alt="">
          </div>
          <div class="pl-10 pt-0 pb-32">
            <h1 class="roboto white font-extrabold ml-10 text-2xl">Welcome!!</h1>
            <form class="space-y-2" action="" method="post">
              <input class="p-1 rounded-2xl placeholder:p-2 outline-none" type="text" name="id" id="id" placeholder="Enter Your ID">
              <input class="p-1 rounded-2xl placeholder:p-2 outline-none " type="password" name="password" id="password" placeholder="Enter Password">
                    
              <a href=""><button class="bg-blue-600 hover:bg-blue-800 p-2 rounded-xl white mt-5 ml-14 mb-3" name="login" id="login">Login</button></a>
              <h3 class="text-white text-sm mb-20 ml-5">New user? <span><a class="text-white text-lg hover:ease-in-out duration-200 hover:text-xl " href="register.php">Register</a></span> </h3>
            </form>  
          </div>
        </div>
  </header>
  <main>
    <div class>
      <div class="ml-14 invisible lg:visible lg:ml-[630px] pt-10">
          <a href="index.php"><img class="w-[250px] h-[100px] " src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt=""></a>
      </div>
      <div class="flex flex-row invisible lg:visible justify-center space-x-10  lg:mt-8 lg:mr-36 lg:mb-28 lg:ml-96 lg:max-w-2xl lg:h-max rounded-2xl shadow-2xl bg-sky-500">
        <div>
          <img class="rounded-2xl nded rounded-r-none w-full h-full " src="Images/mu(11).png" alt="">
        </div>
        <div class="pr-16 pb-5">
          <h1 class="roboto white font-extrabold text-center text-2xl mt-10 mb-5">Welcome!!</h1>
          <form class="space-y-2" action="" method="post">
            <input class="p-1 rounded-2xl placeholder:p-2 outline-none" type="text" name="id" id="id" placeholder="Enter Your ID">
            <input class="p-1 rounded-2xl placeholder:p-2 outline-none " type="password" name="password" id="password" placeholder="Enter Password">
                  
            <a href=""><button class="bg-blue-600 hover:bg-blue-800 p-2 rounded-xl white mt-5 ml-14 mb-3" name="login" id="login">Login</button></a>
            <h3 class="text-white text-sm mb-20 ml-5">New user? <span><a class="text-white text-lg hover:ease-in-out duration-200 hover:text-xl " href="register.php">Register</a></span> </h3>
          </form>  



        </div>


      </div>
    </div>

    <!--Responsive-->

    </div>



    
  </main>
  <footer>

  </footer>
</body>
</html>