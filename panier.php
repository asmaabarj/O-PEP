<?php
session_start();
@include "config.php";

// Establish a database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the user is logged in
if (!isset($_SESSION['idUtilisateur']) || (isset($_SESSION['user_type']) && $_SESSION['user_type'] !== 'client')) {
    // Handle the case where the user is not logged in or is not a client
}

$userData = array();

if (isset($_SESSION['idUtilisateur'])) {
    $userData = $_SESSION['idUtilisateur'];
}

// Fetch basket items for the logged-in user
$userId = $_SESSION['idUtilisateur'];

$platspanier = "SELECT p.*, COUNT(*) as quantity FROM plante p
                INNER JOIN panier ON p.idPlante = panier.idPlante
                WHERE panier.idUtilisateur = $userId
                GROUP BY panier.idPanier;";
$result = $conn->query($platspanier);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        #summary {
            background-color: #f6f6f6;
            display: flex;
            flex-direction: column;
            justify-content: end;
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-10">
        <div class="flex shadow-md my-10">
            <div class="w-3/4 bg-white px-10 py-10">
                <div class="flex justify-between border-b pb-8">
                    <h1 class="font-semibold text-2xl">Shopping Cart</h1>
                    <h2 class="font-semibold text-2xl"><?php echo $result->num_rows; ?> Items</h2>
                </div>
                <div class="flex gap-[125px] mt-10 mb-5">
                    <h3 class="font-semibold text-gray-600 text-xs uppercase w-2/5">Product Details</h3>
                    <h3 class="font-semibold text-center text-gray-600 text-xs uppercase w-1/5 text-center">Price</h3>
                </div>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        // Display each entry in the shopping cart
                        ?>
                        <div class="flex items-center justify-between hover:bg-gray-100 -mx-8 px-6 py-5">
                            <div class="flex w-2/5">
                                <!-- Display product image, name, etc. -->
                                <div class="w-20">
                                    <!-- Assuming there's an 'image' column in your database -->
                                    <img class="h-24" src="<?php echo $row['imagePlant']; ?>" alt="">
                                </div>
                                <div class="flex flex-col justify-around ml-4 flex-grow">
                                    <span class="font-bold text-sm"><?php echo $row['nomPlante']; ?></span>
                                    <!-- Assuming there's a 'brand' column in your database -->
                                </div>
                            </div>
                            <span class="text-center w-1/5 font-semibold text-sm"><?php echo $row['prix']; ?> MAD</span>
                            <a href="#" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none flex items-center h-[5vh] focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Remove</a>
                        </div>
                        <?php
                    }
                } else {
                    echo "No items in the cart.";
                }
                ?>
                <a href="productClient.php" class="flex font-semibold text-indigo-600 text-sm mt-10">
                    <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512"><path d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"/></svg>
                    Continue Shopping
                </a>
            </div>

            <div id="summary" class="w-1/4 px-8 py-10">
                <div class="border-t  mt-8">
                    <div class="flex font-semibold justify-between  py-6 text-sm uppercase">
                        <span>Total cost</span>
                        <?php
                        $totalCost = 0;

                        $result->data_seek(0);

                        while ($row = $result->fetch_assoc()) {
                            $totalCost += $row['prix'];
                        }

                        echo '<span>' . $totalCost . ' MAD</span>';
                        ?>
                    </div>
                    <button class="bg-indigo-500 font-semibold hover:bg-indigo-600 py-3 text-sm text-white uppercase w-full">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
