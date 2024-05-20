<?php

  require 'config.php';
  

  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $id = $_POST["id"];
    $department = $_POST["department"];
    $batch = $_POST["batch"];
    $bg = $_POST["bg"];
    $password = $_POST["password"];


    $duplicate = mysqli_query($conn, "SELECT * FROM `login` WHERE id='$id'");
    
    if(mysqli_num_rows($duplicate) > 0){
      echo "<script> alert('Id has already registerd.') </script>";
    }
    else{ 
        $query = "INSERT INTO `login` (`name`, `id`, `department`, `batch`, `bg`, `password`) VALUES ('$name', '$id', '$department', '$batch', '$bg ', '$password');";
        mysqli_query($conn, $query);
        echo "<script> alert('Registration Successful.') </script>";
        header("Location: login1.php");
    }
  }
?>












<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
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
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
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
    <div class="flex flex-row justify-center space-x-10  mt-8 mr-36 mb-20 ml-80 max-w-3xl h-max rounded-2xl shadow-2xl bg-sky-500">
      <div class="pl-16 pt-10 pb-10 space-y-3">
        <h1 class="roboto white font-extrabold ml-10 text-2xl ">Register</h1>
          <form class="space-y-3 ml-3" action="" method="post">         
            <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="text" name="name" placeholder="Enter Your Name" required>                  
            <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="number" name="id" id="id" placeholder="Enter Your Student ID" required>

            <select class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none pr-8 font-semibold" name="department" id="department" required>
              <option value="">Select Department</option>
              <option value="CSE" name="CSE">CSE</option>
              <option value="EEE" name="EEE">EEE</option>
              <option value="LAW" name="LAW">LAW</option>
              <option value="BBA" name="BBA">BBA</option>
              <option value="SWE" name="SWE">SWE</option>
              <option value="ECO" name="ECO">ECO</option>

            </select>  
            <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="text" name="batch" id="batch" placeholder="Enter Your Batch" required>     
            
            <select class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none pr-8 font-semibold" name="bg" id="bg" required>
              <option value="">Select Blood Group</option>
              <option value="A+" name="A+">A+</option>
              <option value="B+" name="B+">B+</option>
              <option value="O+" name="O+">O+</option>
              <option value="A-" name="A-">A-</option>
              <option value="B-" name="B-">B-</option>
              <option value="O-" name="O-">O-</option>
              <option value="AB+" name="AB+">AB+</option>
              <option value="AB-" name="AB-">AB-</option> 
            </select> 
            <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="password" name="password" id="password" placeholder="Set Password" required> 
          
            <button class="bg-blue-600 hover:bg-blue-800 text-white rounded-xl p-3 ml-14 mt-5" name="submit" id="submit" type="submit">Sign Up</button>
          </form>
        </div>
      <div>
        <img class="rounded-2xl rounded-l-none w-full h-full ml-2" src="Images/mu (6).png" alt="">
      </div>
    </div>
    
  </main>
</body>
</html>