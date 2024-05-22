<?php
  require 'config.php';
  require 'userConfig.php';
  // $bg = $row["bg"];
?>


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
    <div class="invisible lg:visible ">
      <?php
        require 'userSidebar.php';
      ?>
    </div>
    
  </header>

  <main>
    <div class=" visible lg:hidden flex flex-col space-y-20">
      <div class="flex flex-row justify-between items-center pr-5 bg-sky-600 w-full h-[100px]">
        <div class="drawer relative">
          <input id="my-drawer" type="checkbox" class="drawer-toggle" />
          <div class="drawer-content">
            <!-- Page content here -->
            <label for="my-drawer" >
              <svg class="w-10 h-10 m-2" data-slot="icon" fill="white" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12H12m-8.25 5.25h16.5"></path>
              </svg>
            </label>
          </div> 
          <div class="drawer-side">
            <label for="my-drawer" aria-label="close sidebar" class="drawer-overlay"></label>
            <ul class="menu p-4 w-40 min-h-full text-white bg-blue-900 text-base-content">
              <!-- Sidebar content here -->
              <li><a>
                <div class="flex items-center space-x-2 hover:font-bold">
                  <img class="w-[30px] h-[28px]" src="Images/image (1).png" alt="">
                  <a href="userAdmit.php">Admit Card</a>
                </div>
              </a></li>
              <li><a>
                <div class="flex items-center space-x-2 hover:font-bold">
                  <img class="w-[30px] h-[28px]" src="Images/image.png" alt="">
                  <a href="userQuestion.php">Question Bank</a>
                </div>
              </a></li>
              <li><a>
                <div class="flex items-center space-x-2 hover:font-bold">
                  <img class="w-[30px] h-[28px]" src="Images/image (4).png" alt="">
                  <a href="userSchedule.php">Exam Schedule</a>
                </div>
              </a></li>
              <li><a>
                <div class="flex items-center space-x-2 hover:font-bold">
                  <img class="w-[30px] h-[28px]" src="Images/image (3).png" alt="">
                  <a href="userResult.php">Result</a>
                </div>
              </a></li>
              <li><a>
                <div class="flex space-x-2 hover:font-bold">
                  <svg class="w-[30px] h-[28px]"data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"></path>
                  </svg>
                  <a href="About">About</a>
                </div>
              </a></li>
              <li><a>
                <div class="flex space-x-2 hover:font-bold">
                  <svg class="w-[26px] h-[24px]" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"></path>
                  </svg>
                  <a href="userContact.php">Contact</a>
                </div>
              </a></li>
              <li><a>
                <div>
                  <a href="logout.php"><button class="bg-red-500 hover:bg-red-700 pr-4 pl-4 pt-2 pb-2 rounded-3xl">Logout</button></a>
                </div>
              </a></li>
      
            </ul>
          </div>
        </div> 
        <div>
          <img class="w-[60px] h-[60px] m-5 pr-5" src="Images/MU EXAM & (1)-fotor-2024051717826.png" alt="">
        </div>
        <img class="w-[100px] h-[80px] m-5 " src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt="">

        <div class="flex items-center text-white space-x-4 ">
          <p class="font-semibold pr-2">Hi, <?php echo $row["name"]; ?></p>
          <svg class="w-5" data-slot="icon" fill="none" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"></path>
          </svg>
          <div class="indicator">
            <span class="indicator-item badge w-2 bg-green-500"></span> 
            <div><a href="userDash.php"><img class="w-10 h-10 rounded-full" src="pPic/<?php echo $row['image']; ?>" alt=""></a></div>
          </div>
        </div>
      </div>
      
      <div class="flex space-x-4  ml-10 bg-gradient-to-r from-indigo-800 via-sky-600 to-cyan-500  w-[350px] h-[300px] rounded-xl shadow-2xl">
        <div>
          <img class="w-[200px] pl-10 pb-0 pt-14 " src="pPic/<?php echo $row['image']; ?>"  alt="">
        </div>
        <div class="space-y-3 text-white">
          <h1 class="font-extrabold text-xl ml-5 mt-5">Profile</h1>
          <p class="ml-5 text-[140px]">Name: <?php echo $row["name"];?></p>
          <p class="ml-5 font-semibold">Id No: <?php echo $row["id"];?></p>
          <p class="ml-5 font-semibold">Department: <?php echo $row["department"];?></p>
          <p class="ml-5 font-semibold">Batch: <?php echo $row["batch"];?></p>
          <a href="userEditProfile.php"><button class="bg-sky-200 text-blue-600 text-sm font-semibold pr-2 pl-2 pt-1 pb-1 mt-3 rounded-xl ml-10 hover:bg-blue-600 hover:text-sky-200">Edit Profile</button></a>
        </div>
      </div>
    </div> <!--Responsive done-->
  
    
    
    <div class="hidden lg:visible lg:flex lg:flex-col lg:space-y-36">
      <div class="flex flex-row justify-between items-center relative bg-sky-600 lg:w-auto lg:h-[100px] lg:ml-[200px]">
        <div>
          <img class="w-[80px] h-[80px] m-5" src="Images/MU EXAM & (1)-fotor-2024051717826.png" alt="">
        </div>
        <img class="lg:w-[200px] h-[80px] m-5" src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt="">

        <div class="flex items-center text-white space-x-4 lg:mr-10">
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
      
      <div class="flex space-x-4 relative  bg-gradient-to-r from-indigo-800 via-sky-600 to-cyan-500  lg:w-[550px] h-[300px] lg:ml-[550px] rounded-xl shadow-2xl">
        <div>
          <img class="lg:w-[200px] pl-10 pb-0 pt-14 " src="pPic/<?php echo $row['image']; ?>"  alt="">
        </div>
        <div class="space-y-3 text-white">
          <h1 class="font-bold text-[40px ml-20 mt-5">Profile</h1>
          <p class="ml-10 font-semibold text-[18px] ">Name: <?php echo $row["name"];?></p>
          <p class="ml-10 font-semibold text-[18px]">Id No: <?php echo $row["id"];?></p>
          <p class="ml-10 font-semibold text-[18px]">Department: <?php echo $row["department"];?></p>
          <p class="ml-10 font-semibold text-[18px]">Batch: <?php echo $row["batch"];?></p>
          <a href="userEditProfile.php"><button class="bg-sky-200 text-blue-600 text-sm font-semibold pr-2 pl-2 pt-1 pb-1 rounded-xl mt-2 ml-28 hover:bg-blue-600 hover:text-sky-200">Edit Profile</button></a>
        </div>
      </div>
    </div>    
  </main>
</body>
</html>