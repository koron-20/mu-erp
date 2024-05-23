<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="flex flex-row">
        <!--Side bar-->
        <div class="bg-[#0081a7] w-[200px] h-[100vh] flex flex-col items-center absolute shadow-2xl">
          <div>
            <ul class="flex flex-col p-10 pt-16 text-white space-y-10">
              <div class="flex items-center space-x-2 hover:font-bold">
                <img class="w-[30px] h-[28px]" src="Images/image (1).png" alt="">
                <a href="adminAdmit.php">Admit Card</a>
              </div>
              <div class="flex items-center space-x-2 hover:font-bold">
                <img class="w-[30px] h-[28px]" src="Images/image.png" alt="">
                <a href="adminQuestion.php">Question Bank</a>
              </div>
              <div class="flex items-center space-x-2 hover:font-bold">
                <img class="w-[30px] h-[28px]" src="Images/image (4).png" alt="">
                <a href="adminSchedule.php">Exam Scedule</a>
              </div>
              <div class="flex items-center space-x-2 hover:font-bold">
                <img class="w-[30px] h-[28px]" src="Images/image (3).png" alt="">
                <a href="adminResult.php">Result</a>
              </div>
              
              <div class="flex space-x-2 hover:font-bold">
                <svg class="w-[26px] h-[24px]" data-slot="icon" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"></path>
                </svg>
                <a href="adminContact.php">Contact</a>
              </div>
              <div>
                <a href="logout.php"><button class="bg-red-500 hover:bg-red-700 pr-4 pl-4 pt-2 pb-2 rounded-3xl">Logout</button></a>
              </div>
            </ul>
          </div>
  
        </div>
  
      </div>
</body>
</html>