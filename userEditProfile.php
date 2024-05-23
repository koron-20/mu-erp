<?php
  require 'config.php';
  require 'userConfig.php';  

  $id = $row['id'];
  $department = $row["department"];


  if(isset($_REQUEST['submit'])){
    $name = $_REQUEST["name"];
    $batch = $_REQUEST["batch"];
    $password = $_REQUEST["password"];
    $bg = $_REQUEST["bg"];
    $contact = $_REQUEST["contact"];
    $img = $_FILES['img']['name'];
    // $image = "image/user.png";

    if((!empty($name)) && (!empty($batch))){
      $query = "UPDATE `login` SET `name` = '$name', `batch` = '$batch' WHERE `id` = '$id;'";
      mysqli_query($conn, $query);

      if(!empty($password)){
        $query = "UPDATE `login` SET `password` = '$password' WHERE `id` = '$id';";
        mysqli_query($conn, $query);
      }
      if(!empty($bg)){
        $query = "UPDATE `login` SET `bg` = '$bg' WHERE `id` = '$id';";
        mysqli_query($conn, $query);
      }
      if(!empty($contact)){
        $query = "UPDATE `login` SET `contact` = '$contact' WHERE `id` = '$id';";
        mysqli_query($conn, $query);
      }
      if(!empty($img)){
        $tmpName = $_FILES['img']['tmp_name'];
        $uploadDir = "pPic/";
        move_uploaded_file($tmpName, $uploadDir.$img);
        $query = "UPDATE `login` SET `image` = '$img' WHERE `id` = '$id';";
        mysqli_query($conn, $query);
      }
      
      echo "<script> alert('Profile Updated Successfully.'); window.location.href = 'userDash.php'; </script>";
    }
  }
  


?>

<!DOCTYPE html>
<html data-theme="light" lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Profile</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
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
<body>
<header>
  <?php
      require 'userSidebar.php';
  ?>
  </header>
  <main>
    <div class="flex flex-col space-y-10">
      <div class="flex flex-row justify-between items-center relative bg-sky-600 w-auto h-[100px] ml-[200px]">
        <div>
          <img class="w-[80px] h-[80px] m-5" src="Images/MU EXAM & (1)-fotor-2024051717826.png" alt="">
        </div>
        <img class="w-[200px] h-[80px] m-5" src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt="">

        <div class="flex items-center text-white space-x-4 mr-10">
          <p class="font-semibold">Hi, <?php echo $row["name"]; ?></p>
          <svg class="w-10" data-slot="icon" fill="none" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"></path>
          </svg>
          <div class="indicator">
            <span class="indicator-item badge bg-green-500"></span> 
            <div><a href="userDash.php"><img class="w-12 h-12 rounded-full" src="pPic/<?php echo $row['image']; ?>" alt=""></a></div>
          </div>
        </div>
      </div>
      <div class="space-y-2  mt-28 ml-[550px] w-[500px]  bg-gradient-to-r from-indigo-800 via-sky-600 to-cyan-500  p-2 pr-10 pl-10 rounded-xl shadow-2xl">
        <form class="grid grid-col-2 space-y-1 mb-3 ml-3 pr-10 pl-10 text-white text-sm" action="" method="post" enctype="multipart/form-data">
          <p class="ml-1.5">Name:</p>
          <input class="rounded-2xl p-2 placeholder:p-2 text-sm text-black outline-none" type="text" name="name" value="<?php echo $row["name"]; ?>" placeholder="Enter Your Name" required> 
          <p class="ml-1.5">Batch:</p>
          <input class="rounded-2xl p-2 placeholder:p-2 text-sm text-black outline-none" type="text" value="<?php echo $row["batch"]; ?>" name="batch" id="batch" placeholder="Enter Your Batch" required>
          <p class="ml-1.5">Blood Group:</p>
          <select class="rounded-2xl p-2 placeholder:p-2 text-sm text-black outline-none" name="bg" id="bg" >
                <option class="option1" value="">Select Blood Group</option>
                <option value="A+" name="A+">A+</option> 
                <option value="B+" name="B+">B+</option>
                <option value="O+" name="O+">O+</option>
                <option value="A-" name="A-">A-</option>
                <option value="B-" name="B-">B-</option>
                <option value="AB+" name="AB+">AB+</option> 
                <option value="AB-" name="AB-">AB+</option> 
              </select> 
          <p class="ml-1.5">Contact:</p>
          <input class="rounded-2xl p-2 placeholder:p-2 text-sm text-black outline-none" type="text" value="<?php echo $row["contact"]; ?>" name="contact" id="contact" placeholder="Enter Your Number" >     
          <p class="ml-1.5">Upload Photo:</p>
          <input class="rounded-2xl placeholder:p-2 text-sm text-black outline-none border-2 bg-white" type="file" value="<?php echo $row["batch"]; ?>" name="img" id="img" >     
          <p class="ml-1.5">Enter Password:</p>
          <input class="rounded-2xl p-2 placeholder:p-2 text-sm outline-none" type="password" name="password" id="password" placeholder="Enter Password" > </br>
          <button class="bg-green-500 hover:bg-green-700  text-white rounded-xl p-2  ml-5 mr-5 mt-5" name="submit" id="submit" type="submit"> Update Profile</button>
          
        </form>
      </div>  
      
      

      
    </div>
  </main>
</body>
</html>

