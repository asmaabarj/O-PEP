<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'PEP</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

<header class="header sticky w-[100%] top-0 bg-white shadow-md flex items-center justify-between px-8 py-02 z-50	">
        <a href="index.php">
            <img src="images/logoPage.png" alt="" class="md:h-[50px] md:w-[100px] h-[35px] w-[90px]">
        </a>
      
        <nav class="nav font-semibold w-[100%] text-lg">
            <ul class="flex items-center w-[100%] justify-center  ">
                <li
                    class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer active">
                    <a href="index.php">Home</a>
                </li>
                <li
                    class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="login.php">Product</a>
                </li>
                <li
                    class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">
                    <a href="contactUs.php">Contact</a>
                </li>
            </ul>
        </nav>

        <a href="login.php">
        <button class="bg-green-500 hover:bg-white text-white  w-[6rem] h-[2rem] font-medium hover:text-black border-[1px] pb-1 px-4  border-white  rounded">
                    sign in
                </button>
        </a>
        <a href="registerPage.php">
        <button class="bg-green-500 hover:bg-white text-white w-[6rem] h-[2rem] font-medium hover:text-black border-[1px] pb-1 px-4 ml-[10px]  border-white  rounded">
                    sign up
                </button>
        </a>
        </div>
    </header>
    <section class="h-[90vh]">
    <div class="flex items-center  mt-14 ml-12">
            <div class="flex-col w-[100%] flex text-left justify-between ">
                <h1 class="text-3xl font-bold "> "Discover Joy at O'PEP: We're Here<br> for You!"
 </h1><br>
                <h2 class=" font-medium">"Your Satisfaction at O'PEP: We're Here for You!"
</h2>
                <p class="drop-shadow-lg text-teal-800 ">"We are delighted to offer you an outstanding experience with O'PEP's <br>diverse plant selection. Your satisfaction is our utmost priority, and our<br> dedicated team is always at your service, ready to assist you in making <br>your garden flourish with O'PEP's vibrant greenery."
                </p>
            </div>
            <img src="./images/caroussel3.png" class=" mt-10 md:mt-0 md:ml-7">
        </div>
    </section>

    <section class="bg-gray-300/70 bg-cover w[100%] md:flex justify-around">
        <div class="mt-28 md:ml-20 flex flex-col justify-around items-center h-96">
            <div class=" p-6 w-80 bg-gradient-to-b from-slate-300 to-white rounded-xl shadow-lg  space-x-4">
                <div class="shrink-0 flex ">
                    <img class="h-7 w-7" src="./images/mail.png">

                    <div class="  md:ml-7 flex flex-col ">
                        <div class=" text-lg text-slate-500">Address :</div>
                        <p class="mb-0.5 text-sm font-bold">198 West 21th Street, Suite 721 New York NY 10016</p>
                    </div>
                </div>
            </div>
            <div class="  p-6 w-80 bg-gradient-to-b from-slate-300 to-white rounded-xl shadow-lg  space-x-4">
                <div class="shrink-0 flex">
                    <img class="h-7 w-7" src="./images/phone.png">

                    <div class=" ml-7 flex flex-col gap-1">
                        <div class=" text-lg text-slate-500">Phone:</div>
                        <p class="mb-0.5 text-sm font-bold">+ 1235 2355 98</p>
                    </div>
                </div>
            </div>
            <div class="  p-6 w-80 bg-gradient-to-b from-slate-300 to-white rounded-xl shadow-lg  space-x-4">
                <div class="shrink-0 flex">
                    <img class="h-7 w-7" src="./images/map.png">

                    <div class=" ml-7 flex flex-col gap-2 ">
                        <div class=" text-lg text-slate-500">Email:</div>
                        <p class=" mb-0.5 text-sm font-bold">O'PEP@youcode.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col text-center  items-center items-start gap-[1rem] mt-20 mb-6 justify-start ">
            <h3 class="text-3xl font-extrabold">CONTACT US</h3>
            <input class="input-field w-80 h-12 border-[1px] border-black-600 border-solid placeholder:text-gray px-5 rounded-[5px] shadow-lg"
                   type="text" placeholder="your first name">
            <input class="input-field w-80 h-12 border-[1px] border-black-600 border-solid placeholder:text-gray px-5 rounded-[5px] shadow-lg"
                type="text" placeholder="your last name">
            <input class="input-field w-80 h-12 border-[1px] border-black-600 border-solid placeholder:text-gray px-5 rounded-[5px] shadow-lg" type="email" placeholder="your email">
            <input class="input-field w-80 h-12 border-[1px] border-black-600 border-solid placeholder:text-gray px-5 rounded-[5px] shadow-lg"
                type="telephone" placeholder="your phone">
            <textarea class="w-80 h-24 placeholder:text-gray px-5 rounded-[5px] shadow-lg" style="resize: none;"
                 placeholder="Message"></textarea>
            <button
                class=" md:mr-auto right-20 w-28 py-2 rounded-[5px] bg-emerald-500 text-white font-semibold  shadow-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75"
                type="submit">send</button>
        </div>
    </section>
    <section class="bg-slate-400 md:h-screen flex justify-center items-center p-2">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3372.699891148379!2d-9.237661325937365!3d32.29304570856466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xdac211719897669%3A0x6f59fa5bb517f58a!2sYoucode%20Safi!5e0!3m2!1sen!2sma!4v1698854756466!5m2!1sen!2sma"
            width="1300" height="550" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
   
   
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <footer class="relative bg-green-900 pt-8 pb-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap text-left lg:text-left justify-between mr-[50px]">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl font-semibold text-white">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-blueGray-300">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i></button><button
                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i></button>
                            <div class="mt-[10px]"><input type="text" id="email-address-icon"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="name@flowbite.com"></div>
                    </div>
                </div>
                <div class="ml-[10vw]">
                <p class=" my-4 text-2xl font-semibold text-white ">Informations </p>
                <p class="text-lg mt-0 mb-2 text-blueGray-300"><a href="#">Home<br></a>
                <a href="#">FAQ<br></a>
                <a href="#">About us<br></a>
                <a href="#">Our history<br></a>
                </p>
            </div>


                <div class="">
                <p class=" my-4 text-2xl font-semibold text-white ">Contact </p>
                <p class="text-lg mt-0 mb-2 text-blueGray-300">www.o'pep-plant.ma
                    <br>contact@o'pep.ma
                    <br>+212 (0) 6 69 66 62 05
                    <br>+212 (0) 6 12 13 14 15
                </p>
            </div>
            </div>
            <hr class="my-6 border-blueGray-300">
            <h2 class="text-center" >Copyright © 2023 Hashtag O'PEP. All Rights Reserved</h2>

        </div>
    </footer>
    <script src="validation.js"></script>
    <script src="burgermenu.js"></script>
    <script src="footerRegex.js"></script>

</body>

</html>