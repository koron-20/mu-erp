<!DOCTYPE html>
<html data-theme="light"  lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
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
            <div><img class="w-12 h-12 rounded-full" src="Images/Untitled design (7).png" alt=""></div>
          </div>
        </div>
      </div>

      <div class="space-y-5  mt-48 ml-[550px] w-[500px] bg-gradient-to-r from-indigo-900 via-sky-800 to-cyan-500  text-center p-10 rounded-xl">
        <div>
          <h1 class="white font-bold text-xl text-white mb-5">Upload Question Bank</h1>
          <p class="text-white font-semibold">Enter course code:</p>
          <form action="">
            <input class="rounded-lg" type="text" name="studentid" id="" placeholder="Enter course code">
          </form>
        </div>
        <div>
          <input class=" border-2 border-gray-300 bg-sky-100 rounded-lg" type="file" name="" id="">
        </div>
        <div>
          <button class="bg-green-500 hover:bg-green-700 text-white font-semibold p-2 rounded-2xl shadow-2xl" type="submit">Upload</button>
        </div>
      </div>
    </div>    
  </main>
  
</body>
</html>

<!--

-->