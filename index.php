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
  <div class="flex flex-row">
        <!--Side bar-->
        <div class="bg-blue-900 w-[200px] h-[100vh] flex flex-col items-center absolute shadow-2xl">
          <div>
            <ul class="flex flex-col p-10 pt-20 text-white space-y-10">
              <div class="flex space-x-2 hover:font-bold">
                <svg class="w-[30px] h-[28px]"data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"></path>
                </svg>
                <a href="Notice">Notice</a>
              </div>
              <div class="flex space-x-2 hover:font-bold">
                <svg class="w-[30px] h-[28px]"data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"></path>
                </svg>
                <a href="About">About</a>
              </div>
              <div class="flex space-x-2 hover:font-bold">
                <svg class="w-[26px] h-[24px]" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"></path>
                </svg>
                <a href="Contact">Contact</a>
              </div>
            </ul>
          </div>
  
        </div>
  
      </div>
  </header>

  <main>
    <div class="flex flex-col space-y-16">
      <div class="flex flex-row justify-between items-center relative bg-sky-700 w-auto h-[100px] ml-[200px]">
        <div>
          <img class="w-[80px] h-[80px] m-5" src="Images/MU EXAM & (1)-fotor-2024051717826.png" alt="">
        </div>
        <img class="w-[200px] h-[80px] m-5" src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt="">
        
        <div class="flex items-center text-white space-x-4 mr-10">
          <a class="font-semibold text-lg" href="login.php">Login</a>
          <a class="font-semibold text-lg" href="register.php">Register</a>

        </div>
      </div>
  
      <div class="carousel w-[600px] h-[400px] ml-[550px] rounded-2xl shadow-2xl">
        <div id="slide1" class="carousel-item relative w-[600px] bg-sky-200 text-black hover:text-white hover:bg-orange-500">
          <div class="flex flex-col items-center p-28 space-y-5">
            <h1 class="font-bold text-2xl pb-0">Admit Card</h1>
            <p class="">No more que, download your admit card from here.</p>
            <a href="login.php"><button class="bg-green-600 hover:bg-green-800 text-white p-3 rounded-xl">Download</button></a>
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
            <a href="login.php"><button class="bg-green-600 hover:bg-green-800 text-white p-3 rounded-xl">Download</button></a>
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
            <a href="login.php"><button class="bg-green-600  hover:bg-green-800 text-white p-3 rounded-xl">Download</button></a>
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
            <a href="login.php"><button class="bg-green-600  hover:bg-green-800 text-white p-3 rounded-xl">Download</button></a>
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