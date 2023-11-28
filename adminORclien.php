<?php
@include 'config.php';

if (isset($_POST['client'])) {
    $roleSelect = "SELECT idRole FROM roles WHERE nameRole = 'client'";
    $roleResult = mysqli_query($conn, $roleSelect);
    $roleRow = mysqli_fetch_assoc($roleResult);
    $roleId = $roleRow['idRole'];

    $insert = "INSERT INTO utilisateur (nomUtilisateur, prénomUtilisateur, emailUtilisateur, MdpUtilisateur, idRole)
               VALUES ('$_GET[lname]', '$_GET[fname]', '$_GET[email]', '$_GET[password]', '$roleId')";
    mysqli_query($conn, $insert);

    header('location: login.php');
    exit();
} elseif (isset($_POST['admin'])) {
    $roleSelect = "SELECT idRole FROM roles WHERE nameRole = 'admin'";
    $roleResult = mysqli_query($conn, $roleSelect);
    $roleRow = mysqli_fetch_assoc($roleResult);
    $roleId = $roleRow['idRole'];

    $insert = "INSERT INTO utilisateur (nomUtilisateur, prénomUtilisateur, emailUtilisateur, MdpUtilisateur, idRole)
               VALUES ('$_GET[lname]', '$_GET[fname]', '$_GET[email]', '$_GET[password]', '$roleId')";
    mysqli_query($conn, $insert);
    header('location: login.php');
    exit();
}
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
    <section class="bg-[url('images/tsswira.png')] bg-cover min-h-screen flex items-center justify-center">

        <form class="flex font-semibold	" action="" method="post">
            <div class="mr-[2rem] bg-gray-300/70 py-2 px-4 rounded">
                <button type="submit" name="client">

                    <svg class="" xmlns="http://www.w3.org/2000/svg" height="9em"
                        viewBox="0 0 448 512">
                        <path
                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                    </svg>
                   Register as Client</button>
            </div>


            <div class="ml-[2rem] bg-gray-300/70  py-2 px-4 rounded">
                <button type="submit" name="admin">
                    <svg xmlns="http://www.w3.org/2000/svg" height="9em"
                        viewBox="0 0 448 512">
                        <path
                            d="M224 256A128 128 0 1 1 224 0a128 128 0 1 1 0 256zM209.1 359.2l-18.6-31c-6.4-10.7 1.3-24.2 13.7-24.2H224h19.7c12.4 0 20.1 13.6 13.7 24.2l-18.6 31 33.4 123.9 36-146.9c2-8.1 9.8-13.4 17.9-11.3c70.1 17.6 121.9 81 121.9 156.4c0 17-13.8 30.7-30.7 30.7H285.5c-2.1 0-4-.4-5.8-1.1l.3 1.1H168l.3-1.1c-1.8 .7-3.8 1.1-5.8 1.1H30.7C13.8 512 0 498.2 0 481.3c0-75.5 51.9-138.9 121.9-156.4c8.1-2 15.9 3.3 17.9 11.3l36 146.9 33.4-123.9z" />
                    </svg>

                    Register as Admin</button>
            </div>
        </form>
    </section>
</body>

</html>