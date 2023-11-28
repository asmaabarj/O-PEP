<?php
@include 'config.php';

if (isset($_POST['submit'])) {
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
 
    
// Check if the email already exists
$select = "SELECT * FROM utilisateur WHERE emailUtilisateur ='$email'";
$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) > 0) {
    $error[] = 'User already exists!';
} else {
    if ($pass != $cpass) {
        $error[] = 'Password not matched!';
    } else {
        // Redirect to role selection page with user data as parameters
        header("location: adminORclien.php?lname=$lname&fname=$fname&email=$email&password=$pass");
       
    }
}
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
        <div class="min-h-[85vh] w-[90%] m-auto gap-[15px] flex flex-col md:flex-row md:justify-evenly items-center  ">
            <div class="md:w-[50%] w-[85%] flex flex-col gap-[25px] mt-[15px]">
                <h1 class="text-gray-900 text-[45px] md:text-[60px]">O'PEP</h1>
                <h3 class="text-gray-900 text-[25px] md:text-[30px]"> Your Gateway to Financial Harmony</h3>
                <p class="text-gray-900 text-[15px] md:text-[18px]">
                    Chez "Jardins en Éveil", nous croyons en la magie des plantes et en leur capacité à apporter la vie à n'importe quel espace. Notre entreprise est née de la passion pour la nature et le désir de partager la beauté et les bienfaits des plantes avec le monde.
                </p>
            </div>

            <div class=" h-[90vh] w-[100%] md:w-[40%] flex justify-center items-center   ">
                <form action="" class="flex flex-col gap-[8px] h-[90%] w-[100%] p-[10px] bg-gray-300/70 items-center justify-center rounded" method="post">
                    <h3 class="text-3xl mb-2.5 uppercase font-medium text-green-900">sign up</h3>
                    <?php
                    if (isset($error)) {
                        foreach ($error as $error) {
                            echo '<span style="color: red; ">' . $error . '</span>';
                        };
                    }
                    ?>

                    <input type="text" name="lname" required placeholder="Enter Your last Name" class="outline-none h-[3rem] p-[5px] w-[85%] rounded">
                    <input type="text" name="fname" required placeholder="Enter Your first Name" class="outline-none h-[3rem] p-[5px] w-[85%] rounded">
                    <input type="email" name="email" required placeholder="Enter Your E-mail" class="outline-none h-[3rem] p-[5px] w-[85%] rounded">
                    <input type="password" name="password" required placeholder="Enter Your password" class="outline-none h-[3rem] w-[85%] p-[5px] rounded">
                    <input type="password" name="cpassword" required placeholder="confirm Your password" class="outline-none h-[3rem] w-[85%] p-[5px] rounded">
                    <input type="submit" name="submit" value="register now" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 w-[85%] rounded cursor-pointer">
                    <p>already have an account?<a class="text-green-700" href="login.php">login now</a></p>
                </form>
            </div>
        </div>
    </section>
    
</body>

</html>
