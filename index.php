<!DOCTYPE html>
<html data-theme="light"  lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@4.11.1/dist/full.min.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</head>
<body>
  <header >
    <?php
    require 'sidebar.php';
    ?>
  </header>

  <main>
    <div class="flex flex-col space-y-16">
      <div class="flex flex-row justify-between items-center relative bg-sky-700 w-auto h-[100px] ml-[200px]">
        <div>
          <img class="w-[80px] h-[80px] m-5" src="Images/MU EXAM & (1)-fotor-2024051717826.png" alt="">
        </div>
        <img class="w-[80px] h-[80px] m-5 bg-slate-300 rounded-lg" src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt="">

        <div class="flex items-center text-white space-x-4 mr-10">
          <a class="font-semibold text-lg" href="login1.php">Login</a>
          <a class="font-semibold text-lg" href="rgister1.php">Register</a>

        </div>
      </div>
  
      <div class="carousel w-[600px] h-[400px] ml-[550px] rounded-2xl shadow-2xl">
        <div id="slide1" class="carousel-item relative w-[600px] bg-sky-200 text-black hover:text-white hover:bg-orange-500">
          <div class="flex flex-col items-center p-28 space-y-5">
            <h1 class="font-bold text-2xl pb-0">Admit Card</h1>
            <p class="">No more que, download your admit card from here.</p>
            <a href="login1.html"><button class="bg-green-600 hover:bg-green-800 text-white p-3 rounded-xl">Download</button></a>
          </div>
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide4" class="btn btn-circle">❮</a> 
            <a href="#slide2" class="btn btn-circle">❯</a>
          </div>
        </div> 
        <div id="slide2" class="carousel-item relative w-[600px] bg-sky-200 text-black hover:text-white hover:bg-purple-500">
          <div class="flex flex-col items-center p-28 space-y-5">
            <h1 class="font-bold text-2xl pb-0">Question Bank</h1>
            <p class="">Collect previous year questions from our question bank.</p>
            <a href="login1.html"><button class="bg-green-600 hover:bg-green-800 text-white p-3 rounded-xl">Download</button></a>
          </div>
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide1" class="btn btn-circle">❮</a> 
            <a href="#slide3" class="btn btn-circle">❯</a>
          </div>
        </div> 
        <div id="slide3" class="carousel-item relative w-[600px] bg-sky-200 text-black hover:text-white hover:bg-red-500">
          <div class="flex flex-col items-center p-28 space-y-5">
            <h1 class="font-bold text-2xl pb-0">Exam Scedule</h1>
            <p class="">Find your exam scedule and download as .pdf file.</p>
            <a href="login1.html"><button class="bg-green-600  hover:bg-green-800 text-white p-3 rounded-xl">Download</button></a>
          </div>
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide2" class="btn btn-circle">❮</a> 
            <a href="#slide4" class="btn btn-circle">❯</a>
          </div>
        </div> 
        <div id="slide4" class="carousel-item relative w-[600px] bg-sky-200 text-black hover:text-white hover:bg-cyan-500">
          <div class="flex flex-col items-center p-28 space-y-5">
            <h1 class="font-bold text-2xl pb-0">Result</h1>
            <p class="">Check your result confidentially and download as .pdf file. </p>
            <a href="login1.html"><button class="bg-green-600  hover:bg-green-800 text-white p-3 rounded-xl">Download</button></a>
          </div>
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide3" class="btn btn-circle">❮</a> 
            <a href="#slide1" class="btn btn-circle">❯</a>
          </div>
        </div>
      </div>
    </div>
    
  </main>
  
</body>
</html>