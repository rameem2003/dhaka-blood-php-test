<?php 

    include './include/configuration.php';
    session_start();

    if(isset($_POST['submit'])){
        $admin_user = $_POST['admin_uname'];
        $admin_pass = $_POST['admin_pass'];

        $login_query = "SELECT * FROM `admin` WHERE admin_user = '$admin_user' AND admin_password = '$admin_pass'";

        $run = mysqli_query($conn, $login_query);

        if(mysqli_num_rows($run) > 0){
            $row = mysqli_fetch_assoc($run);
            $_SESSION['admin_id'] = $row['id'];
            header("location:dashboard.php");
        }else{
            echo '<script> alert("Something went wrong Admin!"); </script>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login || Dhaka Blood Bank</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

    <!-- local css -->
    <link rel="stylesheet" href="./css/admin-login.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="login">
        <h1 class="title">Admin login</h1>

        <form action="" method="post">
            <input type="text" name="admin_uname" id="uname" placeholder="Username">

            <div class="password">
                <input type="password" name="admin_pass" id="pass" placeholder="Enter password...." required>
                <i class="fa-solid fa-eye tog"></i>
            </div>

            <input type="submit" name="submit" value="Login">
        </form>
    </div>


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
    <!-- js end -->
</body>
</html>