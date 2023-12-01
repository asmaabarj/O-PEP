<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $newPlantName = $_POST['plantName'];
    $selectedCategory = $_POST['categorySelect'];
    $newPlantImage = $_POST['image'];
    $newPlantPrice = $_POST['price'];

    if (!empty($newPlantName) && !empty($selectedCategory) && !empty($newPlantImage) && !empty($newPlantPrice)) {
        $checkPlantQuery = "SELECT * FROM plante WHERE nomPlante = '$newPlantName' AND idCategorie = '$selectedCategory'";
        $checkPlantResult = mysqli_query($conn, $checkPlantQuery);

        if (mysqli_num_rows($checkPlantResult) == 0) {
            $insertPlantQuery = "INSERT INTO plante (nomPlante, idCategorie, imagePlant, prix) 
                                VALUES ('$newPlantName', '$selectedCategory', '$newPlantImage', '$newPlantPrice')";
            mysqli_query($conn, $insertPlantQuery);
        } else {
            $error = "Plant with the same name in the same category already exists.";
        }
    } else {
        $error = "Please fill in all fields.";
    }
}

$categoryQuery = "SELECT idCategorie, nomCategorie FROM categorie";
$categoryResult = mysqli_query($conn, $categoryQuery);
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
    <section class="flex justify-center items-center h-screen">
        <form action="formAddPlant.php" method="POST"  class="w-1/3">
            <?php if (isset($error)) : ?>
                <p class="text-red-500"><?php echo $error; ?></p>
            <?php endif; ?>

            <div class="mb-4">
                <label for="image" class="block text-sm font-bold text-gray-600">Plant Image:</label>
                <input type="text" name="image"   class="border border-gray-300 p-2 w-full">
            </div>
            <div class="mb-4">
                <label for="plantName" class="block text-sm font-bold text-gray-600">Plant Name:</label>
                <input type="text" name="plantName"  class="border border-gray-300 p-2 w-full">
            </div>
            <div class="mb-4">
                <label for="categorySelect" class="block text-sm font-bold text-gray-600">Category:</label>
                <select name="categorySelect"  class="border border-gray-300 p-2 w-full">
                    <option value="">Select a category</option>
                    <?php
                    if (mysqli_num_rows($categoryResult) > 0) {
                        while ($categoryRow = mysqli_fetch_assoc($categoryResult)) {
                            echo '<option value="' . $categoryRow['idCategorie'] . '">' . $categoryRow['nomCategorie'] . '</option>';
                        }
                    } 
                    ?>
                </select>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-sm font-bold text-gray-600">Price:</label>
                <input type="text" name="price" id="price" class="border border-gray-300 p-2 w-full">
            </div>
            <div>
                <button type="submit" name="submit" class="bg-green-500 text-white px-4 py-2 rounded">Add Plant</button>
            </div>
        </form>
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