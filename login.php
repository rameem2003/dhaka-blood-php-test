<?php 

    include './include/configuration.php';

    session_start();
    if(isset($_POST['login'])){
        $input_email = $_POST["email"];
        $input_pass = $_POST["pass"];


        $login_query = "SELECT * FROM `donors` WHERE email = '$input_email' AND password = '$input_pass'";
        $run = mysqli_query($conn, $login_query);

        if(mysqli_num_rows($run) > 0){
            $row = mysqli_fetch_assoc($run);
            $_SESSION['user_id'] = $row['id'];
            header("location:profile.php");
        }
        else{
            $msg[] = "Email or password are invalid!!!";
        }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

    <!-- local css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./css/header.css">

    <style>
        

        #login{
            margin-top: 100px;
            margin-bottom: 50px;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>


    <!-- header -->
    <?php include './header.php' ?>
    <!-- header end -->


    <!-- login -->
    <section id="login">
        <h1 class="title">Login Here</h1>
        
        <?php 
        
            if(isset($msg)){
                foreach($msg as $msg){
                    echo '<div class="msg">' . $msg . '</div>';
                }
            }
        
        ?>

        <form action="" method="post">
            <input type="email" name="email" id="" placeholder="Enter email....." required autocomplete="off">

            <div class="password">
                <input type="password" name="pass" id="pass" placeholder="Enter password...." required>
                <i class="fa-solid fa-eye tog"></i>
            </div>

            <input type="submit" name="login" value="Login">

            <p>Haven't any account <a href="./register.php">Register now</a></p>

            <p><a href="./">Back to home</a></p>
        </form>
    </section>
    <!-- login end -->

    <!-- footer  -->
    <?php include './footer.php' ?>
    <!-- footer end -->



    <!-- js -->
    <script>
        const tog = document.querySelector(".tog")

        tog.addEventListener("click", () => {
            const pass = document.getElementById("pass")


            if(pass.type === "password"){
                pass.type = "text";
                tog.classList.replace("fa-eye", "fa-eye-slash");
            }else{
                pass.type = "password";
                tog.classList.replace("fa-eye-slash", "fa-eye")
            }
        })
    </script>

    <!-- local js -->
    <script src="./js/main.js"></script>
    <!-- js end -->

</body>
</html>