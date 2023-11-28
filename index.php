<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'PEP</title>
    <script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Ephesis&family=Great+Vibes&family=Irish+Grover&family=Lora:wght@400;500;600;700&family=Open+Sans:ital,wght@0,300;1,300&family=Playfair+Display&family=Poppins:ital,wght@0,200;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700&family=Pridi:wght@200&family=Red+Rose:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        .carousel-container {
            width: 100%;
            height: 100vh;
            overflow: hidden;
            position: relative;
        }
        .carousel-wrapper {
            display: flex;
            transition: transform 5s ease-in-out;
            animation: slide 20s infinite alternate;
        }
        .carousel-item {
            width: 100%;
            flex: 0 0 auto;
            height: 100vh;
            background-size: cover;
            background-position: center;
        }

        @keyframes slide {
            0%,
            100% {
                transform: translateX(0);
            }
            33.33% {
                transform: translateX(-100%);
            }
            66.66% {
                transform: translateX(-200%);
            }
        }
        .faq {
            padding: 3em 0;
            background-color: #EDEDED;
          
        }
        .faqq {
            width: 60%;
            margin-top: 2em;
            padding-bottom: 1em;
            border-bottom: 2px solid black;
            cursor: pointer;
        }
        .faqq .question {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .faqq .reponse {
            max-height: 0;
            overflow: hidden;
            transition: max-height 1s ease, opacity 1s ease;
        }

        .faqq.activeee .reponse {
            max-height: 1000px;
            opacity: 1;
        }

        .faqq button.toggle {
            background-color: transparent;
            border: none;
            font-size: 20px;
        }
        .carousel-content {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 19%;
            left: 49%;
            transform: translate(-50%, -50%);
            display: flex;
            justify-content: end;
            align-items: center;
            gap: 30vh;
            flex-direction: column;
        }
        .carousel-content h1{

            -webkit-text-stroke: 2px #003f04;
          
        }
        .carousel-content p{
            font-family:Great Vibes;
            color: #003f04;
            font-weight: bold;
        }
    </style>
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
    </header>

    <section class="carousel-container ">
        <div class="carousel-wrapper">
            <div class="carousel-item bg-black" style="background: url('images/caroussel1.png'); "></div>
            <div class="carousel-item " style="background-image: url('images/caroussel2.png');"></div>
            <div class="carousel-item " style="background-image: url('images/caroussel3.png');"></div>    
        </div>
        <div class="carousel-content">
            <div><h1 class = "text-[50px] font-semibold text-white text-center font-sans	font-serif	font-mono	">WELCOME TO O'PEP</h1>
            <p class = "text-[30px] text-white text-center ">Cultivating Green Dreams, Sharing Nature's Splendor</p>
        </div>
            <div class=" flex gap-[30px]">
                <button class="bg-white hover:bg-transparent text-black w-[12rem] font-medium hover:text-white border-[1px] py-2 px-4  border-white  rounded">
                    READ MORE
                </button>
                <button class="bg-transparent hover:bg-white text-white w-[12rem] font-medium hover:text-black border-[1px] py-2 px-4  border-white  rounded">
                    SHOW MORE
                </button>
            </div>
        </div>
    </section>

    <section class="bg-slate-200 bg-cover h-[70vh] flex items-center justify-around">
        <div class="text-center flex flex-col items-center gap-4"><svg xmlns="http://www.w3.org/2000/svg" height="2em"
                viewBox="0 0 448 512">
                <path
                    d="M210.6 5.9L62 169.4c-3.9 4.2-6 9.8-6 15.5C56 197.7 66.3 208 79.1 208H104L30.6 281.4c-4.2 4.2-6.6 10-6.6 16C24 309.9 34.1 320 46.6 320H80L5.4 409.5C1.9 413.7 0 419 0 424.5c0 13 10.5 23.5 23.5 23.5H192v32c0 17.7 14.3 32 32 32s32-14.3 32-32V448H424.5c13 0 23.5-10.5 23.5-23.5c0-5.5-1.9-10.8-5.4-15L368 320h33.4c12.5 0 22.6-10.1 22.6-22.6c0-6-2.4-11.8-6.6-16L344 208h24.9c12.7 0 23.1-10.3 23.1-23.1c0-5.7-2.1-11.3-6-15.5L237.4 5.9C234 2.1 229.1 0 224 0s-10 2.1-13.4 5.9z" />
            </svg>
            <h1 class="font-bold">
                PLANT AND ACCESSORIES SALES
            </h1>
            <p> O'PEP offers a range of indoor and outdoor<BR> plants, along with accessories like pots,<BR> substrates,
                and gardening tools.</p>
        </div>
        <div class=" text-center flex flex-col items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                viewBox="0 0 512 512">
                <path
                    d="M272 96c-78.6 0-145.1 51.5-167.7 122.5c33.6-17 71.5-26.5 111.7-26.5h88c8.8 0 16 7.2 16 16s-7.2 16-16 16H288 216s0 0 0 0c-16.6 0-32.7 1.9-48.2 5.4c-25.9 5.9-50 16.4-71.4 30.7c0 0 0 0 0 0C38.3 298.8 0 364.9 0 440v16c0 13.3 10.7 24 24 24s24-10.7 24-24V440c0-48.7 20.7-92.5 53.8-123.2C121.6 392.3 190.3 448 272 448l1 0c132.1-.7 239-130.9 239-291.4c0-42.6-7.5-83.1-21.1-119.6c-2.6-6.9-12.7-6.6-16.2-.1C455.9 72.1 418.7 96 376 96L272 96z" />
            </svg>
            <h1 class="font-bold">
                GARDENING ADVICE
            </h1>
            <p>O'PEP provides expert advice on plant selection,<BR> planting, and maintenance, tailored to growth<BR>
                conditions and location.</p>
        </div>
        <div class="text-center flex flex-col items-center gap-4"> <svg xmlns="http://www.w3.org/2000/svg" height="2em"
                viewBox="0 0 384 512">
                <path
                    d="M384 312.7c-55.1 136.7-187.1 54-187.1 54-40.5 81.8-107.4 134.4-184.6 134.7-16.1 0-16.6-24.4 0-24.4 64.4-.3 120.5-42.7 157.2-110.1-41.1 15.9-118.6 27.9-161.6-82.2 109-44.9 159.1 11.2 178.3 45.5 9.9-24.4 17-50.9 21.6-79.7 0 0-139.7 21.9-149.5-98.1 119.1-47.9 152.6 76.7 152.6 76.7 1.6-16.7 3.3-52.6 3.3-53.4 0 0-106.3-73.7-38.1-165.2 124.6 43 61.4 162.4 61.4 162.4.5 1.6.5 23.8 0 33.4 0 0 45.2-89 136.4-57.5-4.2 134-141.9 106.4-141.9 106.4-4.4 27.4-11.2 53.4-20 77.5 0 0 83-91.8 172-20z" />
            </svg>
            <h1 class="font-bold">
                DELIVERY AND LANDSCAPING </h1>
            <p>O'PEP provides online plant order delivery and <BR>landscaping services for customers creating<BR> floral
                arrangements </p>
        </div>
    </section>

    <section class="h-[90vh]">      
        <div class=" flex items-center justify-between">
            <div class=" pr-8">
            <h1 class=" text-3xl font-bold">&ensp;"Blossoming Beauty:<br>&ensp;Explore the Exquisite Services of O'PEP<br>&ensp;Nursery"
        </h1>
                <p>&emsp;Immerse yourself in a world where every seed is a promise, every bud <br>
                &emsp;is a work of art in the making.At O'PEP Nursery, we invite you to discover<br>
                &emsp;exceptional horticultural services crafted to reveal the splendor of <br>
                &emsp;nature in your space.Welcome to our floral kingdom, where excellence grows<br>
                &emsp;at every step of your gardening journey.Our dedicated team of horticultural<br>
                &emsp;experts is here to guide you, from the meticulous selection of plants to the<br>
                &emsp;creation of a garden that tells your story. Exotic plants, elegant shrubs,<br>
                &emsp;eachvariety has been carefully chosen to brighten your outdoor world.Let our<br>
                &emsp;tailor-made landscaping services transform your dreams into reality. Unique <br>
                &emsp;designs that captivate, outdoor spaces that enchant – that's our promise.</p>
            </div>
            <div>
                <img src="./images/aboutus.png" alt="">
            </div>
        </div>
    </section>

    <section class="h-[90vh]">      
        <div class=" flex items-center justify-between">
            <div>
                <img src="./images/aboutus2.png" alt="">
            </div>
            <div class=" pr-8">
            <h1 class=" text-3xl font-bold">&emsp;"O'PEP: Cultivating Heritage, Blooming <br>&emsp;Beauty"</h1>
                <p>&emsp;&emsp;Let's delve into the history of O'PEP Nursery, a journey rooted in deep<br>
                &emsp;&emsp;family passion. For decades,our commitment to nature has grown, with each<br>
                &emsp;&emsp;plant carrying the legacy of our roots. Our humble beginnings were lessons<br>
                &emsp;&emsp;learned, gradually shaping a collection of rare and exotic plants. Our <br>
                &emsp;&emsp;reputation blossomed, attracting gardening enthusiasts from around the <br>
                &emsp;&emsp;world. The new millennium brought an era of customized landscaping services,<br> 
                &emsp;&emsp;transforming ordinary outdoor spaces into exceptional havens. Today, O'PEP <br>
                &emsp;&emsp;Nursery evolves with unwavering passion, celebrating the continuous flourishing<br> 
                &emsp;&emsp;of nature and beauty. Join us in this botanical story, where each leaf tells <br>
                &emsp;&emsp;the living narrative of O'PEP Nursery.</p>
            </div>
        </div>
    </section>
    </section>

    <section>
        <h1 class="mb-4 text-5xl font-extrabold leading-none tracking-tight text-center py-8">Satisfied customers</h1>
        <div class=" flex justify-evenly">
            <div class=" h-[50vh] w-[24vw] bg-gradient-to-b  from-gray-100 to-gray-300  rounded-md shadow-md text-center">
                <img class="rounded-full h-[28vh] w-[14vw] mx-auto p-2" src="./images/salma.png" alt="feedback">
                <p class="font-light	w-[85%] m-auto ">The O'PEP nursery proved to be an extremely convenient choice, and the team was incredibly friendly. I will not hesitate to use their services again.</p>
                <p class="font-bold text-green-500">Salma M.</p>
            </div>
            <div class="h-[50vh] w-[24vw] bg-gradient-to-b from-gray-100 to-gray-300  rounded-md shadow-md text-center">
                <img class="rounded-full h-[28vh] w-[14vw] mx-auto p-2" src="./images/adam.png" alt="feedback">
                <p class="font-light	w-[85%] m-auto ">The O'PEP nursery proved to be an extremely convenient choice, and the team was incredibly friendly. I will not hesitate to use their services again.</p>
                <p class="font-bold text-green-500">Adam L.</p>
            </div>
            <div class="h-[50vh] w-[24vw] bg-gradient-to-b  from-gray-100 to-gray-300  rounded-md shadow-md text-center">
                <img class="rounded-full h-[28vh] w-[14vw] mx-auto p-2" src="./images/ghita.png" alt="feedback">
                <p class="font-light	w-[85%] m-auto ">The O'PEP nursery proved to be an extremely convenient choice, and the team was incredibly friendly. I will not hesitate to use their services again.</p>
                <p class="font-bold text-green-500">Ghita G.</p>
            </div>
        </div>
    </section>

    <section class="py-16 max-w-full ">
        <div class="bg-[url('images/blurPic.png')] h-64 bg-cover items-center ">
            <div class="flex justify-around text-white font-bold text-2xl text-center  ">
                <div>
                    <p class="my-16">10</p>
                    <p>Years of experience</p>
                </div>
                <div>
                    <p class="my-16">1024</p>
                    <p>Total plant count</p>
                </div>
                <div>
                    <p class="my-16">520</p>
                    <p>Satisfied customer</p>
                </div>
                <div>
                    <p class="my-16">4</p>
                    <p>Total premises</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="faq">
            <h1 class="mb-4 text-5xl font-extrabold leading-none tracking-tight text-center py-4 ">Frequently Asked
                Questions</h1>
            <div class="faqq mx-auto">
                <div class="question">What types of plants does O'PEP nursery offer?<button class="toggle">+</button></div>
                <div class="reponse text-gray-500">O'PEP offers a wide range of plants, including fruit trees, ornamental plants, vegetables, and herbs. The nursery specializes in varieties suited to our local climate.</div>
            </div>
            <div class="faqq mx-auto">
                <div class="question">How can I order plants from O'PEP nursery?<button
                        class="toggle">+</button></div>
                <div class="reponse text-gray-500">You can order plants online through our website or visit our nursery. Select the desired plants, add them to your cart, and follow the simple steps to complete your online order. For in-person purchases, our on-site staff will be happy to assist you.</div>
            </div>
            <div class="faqq mx-auto">
                <div class="question">What payment methods does O'PEP accept?<button class="toggle">+</button>
                </div>
                <div class="reponse text-gray-500">We accept online payments by credit/debit card (Visa, MasterCard) on our website. In person, we also accept cash payments.</div>
            </div>
            <div class="faqq mx-auto">
                <div class="question">Does O'PEP provide gardening advice?<button
                        class="toggle">+</button></div>
                <div class="reponse text-gray-500">Absolutely! Our team of gardening experts is available to provide personalized advice. Feel free to contact us by phone, email, or by visiting our nursery for guidance on plant care, fertilization, and other gardening-related questions.</div>
            </div>
            <div class="faqq mx-auto">
                <div class="question">What guarantees are offered on plants purchased from O'PEP?<button
                        class="toggle">+</button></div>
                <div class="reponse text-gray-500">We offer a satisfaction guarantee on our plants. If you encounter issues in the first few days after purchase, please contact us. We will do our best to resolve the problem, whether through a refund, replacement, or care advice.</div>
            </div>
            <div class="faqq mx-auto">
                <div class="question">Does O'PEP nursery provide delivery services?<button
                        class="toggle">+</button></div>
                <div class="reponse text-gray-500">Yes, we offer delivery services to make plant purchases even more convenient. Delivery fees depend on the distance and the size of the order. You can check the details during the online ordering process or by contacting us directly.
               </div>
            </div>
        </div>
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
                        Find us on any of these platforms, we respond 1-2 business days. </h5>
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

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const faqItems = document.querySelectorAll(".faqq");

            faqItems.forEach((item) => {
                const toggleButton = item.querySelector(".toggle");
                const answer = item.querySelector(".reponse");

                toggleButton.addEventListener("click", function () {
                    item.classList.toggle("activeee");
                    if (item.classList.contains("activeee")) {
                        toggleButton.textContent = "-";
                    } else {
                        toggleButton.textContent = "+";
                    }
                });
            });
        });
    </script>

</body>
</html>