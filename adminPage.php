<?php
include 'config.php';
session_start();
$CliENt="SELECT * FROM utilisateur WHERE idRole=2";
$res=$conn->query("$CliENt");






$plantCat="SELECT
nomCategorie,
(SELECT COUNT(idPlante) FROM plante WHERE idCategorie = c.idCategorie) AS totalPlants
FROM
categorie AS c;
";
$sqlRes=$conn->query("$plantCat");


$A="SELECT COUNT(idPlante) AS D FROM plante  ";
$sqlA=$conn->query("$A");
$B=$sqlA->fetch_assoc();

$x="SELECT COUNT(idCommande) AS y FROM commande  ";
$sqlx=$conn->query("$x");
$z=$sqlx->fetch_assoc();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'PEP</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
<header class="header sticky w-[100%] top-0 bg-white shadow-md flex items-center justify-between px-8 py-02 z-50 h-[10vh]	">
    <a href="productAdmin.php">
        <img src="images/logoPage.png" alt="" class="md:h-[50px] md:w-[100px] h-[35px] w-[90px]">
    </a>

    <div
                    class="sidebar fixed top-0 right-0 h-screen w-[20%] bg-white flex flex-col items-center justify-start z-50 hidden font-semibold w-[100%] text-lg">
                    <a href="#" onclick=quittemenu() class="mt-2.5" ><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"
                        fill="black"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                    </svg></a>
                    <a href="adminPage.php" class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">Dashboard</a>
                    <a href="productAdmin.php" class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">Show Product</a>
                    <a href="formAddCategory.php" class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">Add Category</a>
                    <a href="formAddPlant.php" class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer">Add Plant</a>
                    <a href="formUpdateCategory.php" class="p-4 border-b-2 border-green-500 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer ">Update Category</a>
                    <a href="index.php" class="p-4 border-b-2 border-green-500 text-red-600 border-opacity-0 hover:border-opacity-100 hover:text-green-500 duration-200 cursor-pointer mt-[30vh]">log out</a>

                </div>
                <a href="#" onclick=burgermenu() class=" block "><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"
                    fill='black'>
                    <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                </svg></a>
</header>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<h1 class=" font-bold text-[20px] w-[100%] h-[10vh] flex items-center justify-center">CLIENTS</h1>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th  class="px-6 py-3">
First name                </th>
                <th  class="px-6 py-3">
                  Last name
                </th>
                <th  class="px-6 py-3">
                    E-mail
                </th>
                
               
            </tr>
        </thead>

        <tbody>
       
         <?php  while($rowClient=$res->fetch_assoc()){
    
   echo'
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                '.$rowClient["nomUtilisateur"].'
                </th>
                <td class="px-6 py-4">
                '.$rowClient["prénomUtilisateur"].'
                </td>
                <td class="px-6 py-4">
                '.$rowClient["emailUtilisateur"].'
                </td>
                
                
            </tr>';
        }?>
        </tbody>
    </table>
</div>


<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<h1 class=" font-bold text-[20px] w-[100%] h-[10vh] flex items-center justify-center">PLANTS </h1>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th  class="px-6 py-3">
Categories name                </th>
                <th  class="px-6 py-3">
                 plants number
                </th>

            </tr>
        </thead>

        <tbody>
       
         <?php  while($rowPlant=$sqlRes->fetch_assoc()){
    
   echo'
            <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                '.$rowPlant["nomCategorie"].'
                </th>
                <td class="px-6 py-4">
                '.$rowPlant["totalPlants"].'
                </td>
                
                
            </tr>';
        }?>

        <tr><th class="px-6 py-3">TOTAL</th>
<th>
    <?php echo $B["D"]; ?>
</th>
    </tr>
        </tbody>
    </table>
</div>

<div class="relative overflow-x-auto h-[30vh] shadow-md sm:rounded-lg">
<h1 class="font-bold text-[20px] w-[100%] h-[10vh] flex items-center justify-center">COMMANDE </h1>
    <table class="w-[70%]  text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs  text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th  class="px-6 py-3">
total commands               </th>
                <td  class="px-6 py-3">
                <?php echo $z["y"]; ?>
                </td>

            </tr>
        </thead>

        
    </table>
</div>


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
    function burgermenu(){
    const shown = document.querySelector('.sidebar')
    shown.style.display = 'flex'
}
function quittemenu(){
    const shown = document.querySelector('.sidebar')
    shown.style.display = 'none'
}
</script>
</body>

</html>