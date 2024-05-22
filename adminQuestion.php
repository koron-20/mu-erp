<?php
  require 'config.php';

  if($_SESSION['id']!="admin"){
    header("Location: aDenied.html");
  }

  //check if file is uploaded
  if(isset($_POST['submit'])){
    $targetDir = "qBank/";
    $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
  

    // check if file is a pdf and less than 2MB
    if($fileType != "pdf"){
      echo "<script> alert('Only pdf files are allowed to upload.'); window.location.href = 'adminQuestion.php';</script>";
    }
    else{
      //move upload file to uploads folder
      if(move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)){

        //insert into database
        $code = $_POST["code"];
        $batch = $_POST["batch"];
        

        $filename = $_FILES["pdfFile"]["name"];
        $folder_path = $targetDir;
        
        $duplicate = mysqli_query($conn, "SELECT * FROM `qbank` WHERE ccode='$code' AND batch='$batch' ");
        

        if(mysqli_num_rows($duplicate) > 0){
          echo "<script> alert('Already Uploaded Question.'); window.location.href = 'adminQuestion.php';</script>";
        }
        else {
          $sql = "INSERT INTO `qbank` (`ccode`, `batch`, `filename`, `foldername`) 
                            VALUES ('$code', '$batch', '$filename', '$folder_path');";

          if($conn-> query($sql) === TRUE){
            echo "<script> alert('File Uploaded Successfully.'); window.location.href = 'adminQuestion.php';</script>";
          }
          else{
            echo "Error: " . $sql . "</br>" . $conn->error;
          }
        }
      }
      else{
        echo "<script> alert('Error Uploading File!'); window.location.href = 'adminQuestion.php';</script>";
      }
    }
  }


  //close connection database
  $conn -> close();
?>



<!DOCTYPE html>
<html data-theme="light"  lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>
<body>
  <header >
    <?php
      require 'adminSidebar.php';
    ?>
  </header>

  <main>
    <div class="flex flex-col space-y-28">
    <div class="flex flex-row justify-between items-center relative bg-[#00afb9] w-auto h-[100px] ml-[200px]">
        <div>
          <img class="w-[80px] h-[80px] m-5" src="Images/MU EXAM & (1)-fotor-2024051717826.png" alt="">
        </div>
        <img class="w-[200px] h-[80px] m-5" src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt="">

        <div class="flex items-center text-white space-x-4 mr-10">
          <p class="font-semibold">Hi, Admin</p>
          <svg class="w-10" data-slot="icon" fill="none" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"></path>
          </svg>
          <div class="indicator">
            <span class="indicator-item badge bg-green-500"></span> 
            <div><a href="adminDash.php"><img class="w-12 h-12 rounded-full" src="Images/admin.png" alt=""></a></div>
          </div>
        </div>
      </div>

      <div class="space-y-5  mt-48 ml-[490px] w-[500px] bg-gradient-to-r from-indigo-600 via-cyan-600 to-cyan-500  text-center p-10 rounded-xl">
        <form class="space-y-5" action="" method="post" enctype="multipart/form-data"> 
          <div>
          <h1 class="white font-bold text-xl text-white mb-5">Upload Question Bank</h1>
            <input class="rounded-lg" type="text" name="code" id="code" placeholder="Enter Course Code" required>
            <input class="rounded-lg mt-4" type="text" name="batch" id="batch" placeholder="Enter Batch" required>
        </div>
        <div>
          <input class=" border-2 border-gray-300 bg-sky-100 rounded-lg" type="file" name="pdfFile" id="pdfFile">
        </div>
        <div>
          <button class="bg-green-500 hover:bg-green-700 text-white font-semibold p-2 rounded-2xl shadow-2xl" name="submit" id="submit" type="submit">Upload</button>
        </div>
        </form>
      </div>
    </div>    
  </main>
  
</body>
</html>
