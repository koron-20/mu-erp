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
        <div class="invisible lg:visible bg-blue-900 w-[200px] h-[100vh] flex flex-col items-center absolute shadow-2xl">
          <div>
            <ul class="flex flex-col p-10 pt-20 text-white space-y-10">
              
              <div class="flex space-x-2 hover:font-bold">
                <svg class="w-[30px] h-[28px]"data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"></path>
                </svg>
                <a href="about.php">About</a>
              </div>
              <div class="flex space-x-2 hover:font-bold">
                <svg class="w-[26px] h-[24px]" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"></path>
                </svg>
                <a href="contact.php">Contact</a>
              </div>
            </ul>
          </div>
  
        </div>
  
  </header>

  <main>
    <div class="visible lg:hidden space-y-10">
      <div class="flex flex-row justify-between items-center bg-sky-700 w-full h-[100px]">
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
            <ul class="menu p-4 w-40 min-h-full bg-blue-900 text-base-content">
              <!-- Sidebar content here -->
              <li><a>
                <div class="flex space-x-2 hover:font-bold">
                  <svg class="w-[30px] h-[28px]"data-slot="icon" fill="none" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m11.25 11.25.041-.02a.75.75 0 0 1 1.063.852l-.708 2.836a.75.75 0 0 0 1.063.853l.041-.021M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9-3.75h.008v.008H12V8.25Z"></path>
                  </svg>
                  <a class="text-white" href="about.php">About</a>
                </div>
              </a></li>
              <li><a>
                <div class="flex space-x-2 hover:font-bold">
                  <svg class="w-[26px] h-[24px]" data-slot="icon" fill="none" stroke-width="1.5" stroke="white" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"></path>
                  </svg>
                  <a class="text-white" href="contact.php">Contact</a>
                </div>
              </a></li>
      
            </ul>
          </div>
        </div>  
        <div>
          <img class="w-[60px] h-[60px] m-5" src="Images/MU EXAM & (1)-fotor-2024051717826.png" alt="">
        </div>
        <img class="w-[120px] h-[80px] m-5 pl-5" src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt="">
          
        <div class="flex items-center text-white space-x-4 mr-10">
          <a class="font-semibold text-sm hover:ease-in-out duration-200 hover:text-xl" href="login.php">Login</a>
          <a class="font-semibold text-sm hover:ease-in-out duration-200 hover:text-xl" href="register.php">Register</a>
        </div>
      </div>

      <div class="visible lg:hidden carousel -z-30 w-[300px] h-[300px] fixed ml-14 rounded-2xl shadow-2xl">
        <div id="slide1" class="carousel-item relative w-[300px] lg:w-[600px] bg-sky-200 text-black hover:text-white-">
          <div class="flex flex-col items-center p-5 space-y-5">
            <h1 class="font-bold text-2xl pb-0">Admit Card</h1>
            <p class="">No more que, download your admit card from here.</p>
            <a href="login.php"><button class="bg-green-600 hover:bg-green-800 text-white p-3 rounded-xl">Download</button></a>
          </div>
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide2" class="btn btn-circle animate-pulse ml-48 bg-gray"><svg viewBox="-10.5 0 136 136" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g clip-path="url(#clip0)"> <path d="M7.9145 102.691C8.95085 103.129 10.039 103.471 11.0918 103.802C11.4199 103.906 11.7481 104.01 12.0763 104.116C18.1528 106.009 23.8292 109.005 28.8215 112.953C36.9365 119.456 45.1479 125.574 52.109 130.701C54.0525 132.115 56.252 133.136 58.5855 133.711C62.9785 134.812 67.4875 135.385 72.0163 135.417C81.7097 135.466 91.1374 132.252 98.7837 126.294C109.468 118.221 114.871 107.922 114.838 95.6721C114.839 90.8329 114.353 86.0062 113.388 81.2641C111.573 71.9763 108.652 62.9385 104.689 54.3445C102.583 49.8893 100.134 46.4757 97.2026 43.9087C95.9654 42.7907 94.5044 41.9491 92.9173 41.4398C91.3297 40.9305 89.6514 40.7653 87.9948 40.9552C86.3152 41.1654 84.7 41.7306 83.256 42.6132C81.8121 43.496 80.5723 44.6758 79.6193 46.0746C79.3666 46.4316 79.1224 46.7965 78.8428 47.2127L78.5934 47.5822C74.9803 44.6575 71.3041 43.5372 67.37 44.1522C63.5674 44.7481 61.8916 45.99 58.1459 51.07C50.2902 46.9902 46.3037 49.5106 42.6065 55.0277C42.0027 53.8851 41.4179 52.7633 40.8423 51.6594C39.3984 48.8863 38.0304 46.2669 36.5575 43.6751C33.1721 37.7155 29.8419 31.9003 26.3279 26.2742C24.3034 23.0712 21.4724 20.4569 18.1185 18.6935C14.4194 16.7285 11.1559 17.3926 8.4183 20.6677C7.37728 21.8587 6.65044 23.2909 6.30381 24.8342C5.95718 26.3775 6.00182 27.9829 6.4336 29.5047C7.0079 31.666 7.78756 33.8037 8.54104 35.8712C8.92828 36.9305 9.31427 37.9898 9.67525 39.0564C13.9296 51.6134 19.8589 63.6592 25.5934 75.3079L26.542 77.2335C27.025 78.2181 27.468 79.2026 27.9806 80.3426C28.1512 80.722 28.3278 81.1145 28.5135 81.524L27.9931 81.4315C27.3288 81.3153 26.78 81.2195 26.2346 81.1073C19.8268 79.8025 13.1651 80.7476 7.37354 83.7845C2.96429 85.997 0.930824 89.0201 1.15726 93.0257C1.41586 97.6562 3.69034 100.908 7.9145 102.691ZM32.0853 91.9926C33.6933 93.7483 35.1595 94.2163 36.5719 93.4254C38.0447 92.5991 38.6158 91.165 38.224 89.278C37.9719 88.1616 37.5913 87.0786 37.0898 86.0501C35.3671 82.3655 33.6309 78.6867 31.8811 75.0132C28.3474 67.5598 24.6931 59.8518 21.2768 52.1956C18.8582 46.7755 16.725 41.1147 14.6622 35.6395C14.0303 33.9623 13.396 32.287 12.7589 30.6133C12.1764 29.3344 11.8976 27.938 11.9449 26.5334C12.1101 25.2242 12.7474 24.0202 13.7373 23.1474C14.0694 22.8948 15.6572 23.3154 16.5866 24.017C18.2 25.1673 19.6173 26.5701 20.784 28.1716C23.0817 31.4768 25.1816 34.9153 27.0723 38.469C30.274 44.5933 33.4387 50.8691 36.4992 56.9383C37.983 59.8808 39.4705 62.8215 40.9622 65.7601L41.0673 65.9688C41.4136 66.7459 41.8709 67.4686 42.4251 68.1144C42.779 68.5673 43.2587 68.9059 43.8038 69.0877C44.349 69.2702 44.9358 69.2873 45.4908 69.1383C46.0458 68.9886 46.5445 68.6788 46.9247 68.2476C47.3047 67.8164 47.5494 67.2835 47.6281 66.7138C47.7371 66.1158 47.7622 65.5058 47.7027 64.901C47.6712 64.4899 47.6696 64.0771 47.6976 63.6657C47.7541 63.0685 47.7967 62.4647 47.8387 61.8615C47.8993 60.1463 48.1362 58.4417 48.5456 56.7749C48.638 56.1498 48.9091 55.5648 49.3263 55.0902C49.7435 54.6157 50.2888 54.272 50.8969 54.1003C51.505 53.9288 52.1498 53.9366 52.7535 54.123C53.3572 54.3094 53.8943 54.6666 54.2998 55.1511C55.3934 56.2858 56.3156 57.5739 57.0373 58.9749C57.2388 59.3201 57.4389 59.6648 57.643 60.0021C57.9552 60.572 58.2038 61.1747 58.3837 61.7991C58.4906 62.1273 58.598 62.4503 58.7214 62.7673C59.3869 64.4738 60.6615 65.155 62.3069 64.6909C63.7896 64.2722 64.4892 63.1158 64.2759 61.4415C64.19 60.7641 64.0792 60.0894 63.9677 59.4153C63.86 58.759 63.7523 58.1092 63.6683 57.4528C63.5677 56.6916 63.5303 55.9232 63.5561 55.1557L63.5693 54.8026C63.648 52.6695 63.7228 50.6545 65.9537 49.7277C68.7543 48.5627 71.4105 48.9829 73.4359 50.9092C74.4276 51.9529 75.2783 53.1224 75.9661 54.3877C76.1879 54.7553 76.4085 55.1216 76.6349 55.48C76.8568 55.8577 77.0477 56.2528 77.2059 56.6613C77.435 57.3306 77.7947 57.9476 78.2646 58.4767C79.0588 59.2558 80.4482 59.9404 81.4058 59.7362C82.3634 59.5321 83.344 58.3317 83.7325 57.2908C83.9964 56.4635 84.1447 55.6035 84.1723 54.7356C84.211 54.2427 84.2504 53.7334 84.3351 53.2537C84.4886 52.1667 84.7564 51.0989 85.1332 50.0678C85.8328 48.3331 86.9709 47.1989 88.3453 46.874C89.0239 46.7497 89.7229 46.7923 90.3812 46.9982C91.0402 47.204 91.6388 47.5668 92.1258 48.0554C94.3245 49.9877 97.0405 52.5894 98.5257 55.581C104.409 67.4226 107.813 79.5084 108.643 91.5043C108.684 92.0989 108.672 92.7146 108.661 93.3099C108.655 93.598 108.65 93.8855 108.65 94.173V94.1868C109.419 113.136 89.0856 126.523 74.7493 127.414C63.7883 128.098 54.7636 125.086 47.1705 118.213C41.8003 113.352 35.9918 108.779 31.018 104.948C26.0075 101.05 20.3051 98.1353 14.2113 96.3566L14.0539 96.3113C12.498 95.9175 10.9841 95.3721 9.53421 94.6836C8.20906 93.9938 7.42677 93.0913 7.3316 92.1423C7.24037 91.2286 7.76354 90.2835 8.84584 89.4099C10.3523 88.1701 12.1013 87.2591 13.9808 86.7354C15.9076 86.2155 17.8924 85.9418 19.8879 85.9202C22.876 85.8723 25.8109 86.7157 28.3174 88.3434C29.5005 89.2006 30.5688 90.2061 31.4965 91.335C31.6915 91.5562 31.8877 91.7754 32.0853 91.9913V91.9926Z" fill="#000000"></path> <path d="M45.6002 15.1755C56.3722 15.5141 66.7243 19.4307 75.0231 26.307C75.3434 26.5656 75.661 26.8321 75.978 27.0946C76.8608 27.8271 77.7731 28.5845 78.7412 29.2395C79.456 29.7815 80.3158 30.0991 81.211 30.1518C81.5779 30.1487 81.9409 30.0698 82.2763 29.9202C82.611 29.7705 82.9122 29.5533 83.1597 29.2822C84.9318 27.4838 83.4137 25.547 82.9149 24.9103C82.2205 24.0014 81.4348 23.1658 80.5711 22.4162C72.7928 15.8128 64.1987 11.6451 55.029 10.0292C52.8198 9.63997 50.6137 9.44897 48.2772 9.24682C47.4239 9.17266 46.5648 9.09849 45.6925 9.01251C45.9949 8.6892 46.2929 8.37212 46.586 8.06141C47.5987 6.98504 48.5548 5.96908 49.4678 4.91106C50.5264 3.68502 50.6204 2.41106 49.7238 1.41802C48.3744 -0.0817142 46.8898 0.943475 46.0024 1.55518C42.3473 4.0788 38.7704 6.54338 35.2084 8.93441C33.179 10.2983 32.1053 11.8597 32.1046 13.4507C32.1046 14.9189 33.0331 16.3215 34.7953 17.5062C37.7417 19.3863 40.819 21.0533 44.0033 22.4943L45.447 23.1913C46.5479 23.6068 47.7365 23.7356 48.9008 23.5655C49.2733 23.5671 49.6403 23.4755 49.9684 23.2989C50.2963 23.1224 50.5747 22.8665 50.7785 22.5547C50.9327 22.2317 51.0036 21.8751 50.9842 21.5177C50.9649 21.1602 50.8559 20.8134 50.6676 20.5089C50.0636 19.392 49.2451 18.4052 48.2589 17.6053C47.4165 16.9512 46.5238 16.3645 45.589 15.8509C45.3068 15.6848 45.0102 15.5102 44.6984 15.3258L44.7725 15.3101C45.0423 15.234 45.3201 15.1888 45.6002 15.1755Z" fill="#000000"></path> </g> <defs> <clipPath id="clip0"> <rect width="114.203" height="135.206" fill="white" transform="translate(0.659912 0.447266)"></rect> </clipPath> </defs> </g></svg></a>
          </div>
        </div> 
        <div id="slide2" class="carousel-item relative w-[300px] lg:w-[600px] bg-sky-200 text-black hover:text-white ">
          <div class="flex flex-col items-center p-5 space-y-5">
            <h1 class="font-bold text-2xl pb-0">Question Bank</h1>
            <p class="">Collect previous year questions from our question bank.</p>
            <a href="login.php"><button class="bg-green-600 hover:bg-green-800 text-white p-3 rounded-xl">Download</button></a>
          </div>
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
          </div>
        </div> 
        <div id="slide3" class="carousel-item relative w-[300px] lg:w-[600px] bg-sky-200 text-black hover:text-white ">
          <div class="flex flex-col items-center p-5 space-y-5">
            <h1 class="font-bold text-2xl pb-0">Exam Scedule</h1>
            <p class="">Find your exam scedule and download as .pdf file.</p>
            <a href="login.php"><button class="bg-green-600  hover:bg-green-800 text-white p-3 rounded-xl">Download</button></a>
          </div>
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">

          </div>
        </div> 
        <div id="slide4" class="carousel-item relative w-[300px] lg:w-[600px] bg-sky-200 text-black hover:text-white ">
          <div class="flex flex-col items-center p-5 space-y-5">
            <h1 class="font-bold text-2xl pb-0">Result</h1>
            <p class="">Check your result confidentially and download as .pdf file. </p>
            <a href="login.php"><button class="bg-green-600  hover:bg-green-800 text-white p-3 rounded-xl">Download</button></a>
          </div>
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">

          </div>
        </div>
      </div>
    </div> <!--Responsive done --> 


    <div class="hidden lg:visible lg:flex lg:flex-col lg:space-y-16">
      <div class="flex flex-row justify-between items-center relative bg-sky-700 w-auto h-[100px] lg:ml-[200px]">
        <div>
          <img class="w-[80px] h-[80px] m-5" src="Images/MU EXAM & (1)-fotor-2024051717826.png" alt="">
        </div>
        <img class="w-[200px] h-[80px] m-5" src="Images/301061284_153630137286458_1204505676278690432_n-removebg-preview.png" alt="">
        <div class="flex items-center text-white space-x-4 mr-10">
          <a class="font-semibold text-lg hover:ease-in-out duration-200 hover:text-xl" href="login.php">Login</a>
          <a class="font-semibold text-lg hover:ease-in-out duration-200 hover:text-xl" href="register.php">Register</a>
        </div>
      </div> 
  
      <div class=" carousel w-[600px] h-[400px] lg:ml-[550px] rounded-2xl shadow-2xl">
        <div id="slide1" class="carousel-item relative lg:w-[600px] bg-sky-200 text-black hover:text-white hover:bg-orange-500">
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
        <div id="slide2" class="carousel-item relative lg:w-[600px] bg-sky-200 text-black hover:text-white hover:bg-purple-500">
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
        <div id="slide3" class="carousel-item relative lg:w-[600px] bg-sky-200 text-black hover:text-white hover:bg-red-500">
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
        <div id="slide4" class="carousel-item relative lg:w-[600px] bg-sky-200 text-black hover:text-white hover:bg-cyan-500">
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