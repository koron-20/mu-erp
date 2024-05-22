<?php

  require 'config.php';
  

  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $id = $_POST["id"];
    $department = $_POST["department"];
    $batch = $_POST["batch"];
    $password = $_POST["password"];;
    $image = "user.png";


    $duplicate = mysqli_query($conn, "SELECT * FROM `login` WHERE id='$id'");
    
    if(mysqli_num_rows($duplicate) > 0){
      echo "<script> alert('Id has already registerd.') </script>";
      header("Location: register.php");
    }
    else{ 
        $query = "INSERT INTO `login` (`name`, `id`, `department`, `batch`, `password`, `image`) VALUES ('$name', '$id', '$department', '$batch', '$password' ,'$image');";
        mysqli_query($conn, $query);
        echo "<script> alert('Registration Successful.') </script>";
        header("Location: login.php");
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
    <div class="visible lg:hidden">
      <div class="ml-24 pt-10 lg:ml-[620px]">
        <img class="w-[250px] h-[100px] " src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt="">
      </div>
      <div class="flex flex-col justify-center space-y-0 mt-20 ml-20 w-[300px] h-[500px] rounded-2xl shadow-2xl bg-sky-500">
        <div class="pl-0 pt-10 pb-20 space-y-3">
          <div>
            <img class="rounded-2xl rounded-b-none w-full h-full" src="Images/logoResponse.png" alt="">
          </div>
          <div class="pl-10 pb-16">
            <h1 class="roboto white font-extrabold ml-14 mb-3 text-2xl ">Register</h1>
            <form class="space-y-3 ml-3" action="" method="post">         
              <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="text" name="name" placeholder="Enter Your Name" required>                  
              <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="number" name="id" id="id" placeholder="Enter Your Student ID" required>
              
              <select class="rounded-2xl p-2 placeholder:p-2 text-gray-400 text-sm outline-none pr-8" name="department" id="department" required>
                <option class="option1" value="">Select Department</option>
                <option value="CSE" name="CSE">CSE</option> 
                <option value="EEE" name="EEE">EEE</option>
                <option value="LAW" name="LAW">LAW</option>
                <option value="BBA" name="BBA">BBA</option>
                <option value="SWE" name="SWE">SWE</option>
                <option value="ECO" name="ECO">ECO</option>
              </select>  
  
              <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="text" name="batch" id="batch" placeholder="Enter Your Batch" required>     
              
   
              <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="password" name="password" id="password" placeholder="Set Password" required> 
              <button class="bg-blue-600 hover:bg-blue-800 text-white rounded-xl p-3 ml-12 mt-5" name="submit" id="submit" type="submit">Sign Up</button>
              <p class="text-white text-sm">Already registerd?<span><a class="text-lg pl-2 hover:ease-in-out duration-200 hover:text-xl"  href="login.php">  Login</a></span></p>
            </form>
          </div>

            
          </div>

      </div>
    </div>

  </header>
  <main>
    <div class="invisible lg:visible">
      <div class="ml-[620px] pt-4">
        <img class="w-[250px] h-[100px] " src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt="">
      </div>
      <div class="flex flex-row justify-center space-x-10 mt-8 mr-36 mb-24 ml-80 lg:max-w-3xl lg:h-1/3 rounded-2xl shadow-2xl bg-sky-500">
        <div class="pl-16 pt-10 pb-10 space-y-3">
          <h1 class="roboto white font-extrabold ml-10 text-2xl ">Register</h1>
            <form class="space-y-3 ml-3" action="" method="post">         
              <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="text" name="name" placeholder="Enter Your Name" required>                  
              <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="number" name="id" id="id" placeholder="Enter Your Student ID" required>
              
              <select class="rounded-2xl p-2 placeholder:p-2 text-gray-400 text-sm outline-none pr-8" name="department" id="department" required>
                <option class="option1" value="">Select Department</option>
                <option value="CSE" name="CSE">CSE</option> 
                <option value="EEE" name="EEE">EEE</option>
                <option value="LAW" name="LAW">LAW</option>
                <option value="BBA" name="BBA">BBA</option>
                <option value="SWE" name="SWE">SWE</option>
                <option value="ECO" name="ECO">ECO</option>
              </select>  
  
              <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="text" name="batch" id="batch" placeholder="Enter Your Batch" required>     
              
   
              <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="password" name="password" id="password" placeholder="Set Password" required> 
              <button class="bg-blue-600 hover:bg-blue-800 text-white rounded-xl p-3 ml-12 mt-5" name="submit" id="submit" type="submit">Sign Up</button>
              <p class="text-white text-sm">Already registerd?<span><a class="text-lg pl-2 hover:ease-in-out duration-200 hover:text-xl"  href="login.php">  Login</a></span></p>
            </form>
            
          </div>
        <div>
          <img class="rounded-2xl rounded-l-none w-full h-full" src="Images/mu (6).png" alt="">
        </div>
      </div>
    </div>

    
  </main>
</body>
</html>