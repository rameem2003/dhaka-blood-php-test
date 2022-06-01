<?php 

    include './include/configuration.php';

    if(isset($_POST['register'])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $uname = $_POST["uname"];
        $dob = $_POST["dob"];
        $loc = $_POST["loc"];
        $last_blood = $_POST["last_blood"];
        $blood = $_POST["blood"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];

        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'upload_img/'.$image;

        $insert_data = "INSERT INTO `donors` (f_name, l_name, u_name, dob, location, donate_date, blood, photo, phone, email, password) VALUES('$fname', '$lname', '$uname', '$dob', '$loc', '$last_blood', '$blood', '$image', '$phone', '$email', '$pass')";


        // mysqli_query($conn, $insert_data);

        move_uploaded_file($image_tmp_name, $image_folder);


        if(mysqli_query($conn, $insert_data)){
            $msg[] = "Registration Successfull";
        }else{
            $msg[] = "Registration error";   
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

    <!-- local css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <!-- registration -->
    <section id="register">
        <h1 class="title">Register</h1>

        <?php 
        
            if(isset($msg)){
                foreach($msg as $msg){
                    echo '<div class="msg">' . $msg . '</div>';
                }
            }
        
        ?>

        <form action="" method="post" enctype="multipart/form-data">

            <div class="flex">
                <div class="left">
                    <label for="fname">First name</label>
                    <input type="text" name="fname" id="fname" required>
    
                    <label for="lname">Last name</label>
                    <input type="text" name="lname" id="lname" required>
    
                    <label for="uname">User name</label>
                    <input type="text" name="uname" id="uname" required>

                    <label for="dob">Date of birth</label>
                    <input type="date" name="dob" id="dob" required>
                </div>

                <div class="middle">
                    <label for="loc">Location</label>
                    <input type="text" name="loc" id="loc" required>

                    <label for="last_blood">Last blood donate date</label>
                    <input type="date" name="last_blood" id="last_blood" required>
    
                    <label for="blood">Blood group</label>
                    <select name="blood" id="blood" required>
                        <option value="A+">A+</option>
                        <option value="B+">B+</option>
                        <option value="A-">A-</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>

                    <label for="img">Upload photo</label>
                    <input type="file" name="image" id="" accept="image/jpeg, image/png, image/jpg">
                </div>
    
                <div class="right">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" required>


                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
    
                    <label for="pass">Create Password</label>
                    <div class="password">
                        <input type="password" name="pass" id="pass" placeholder="" required>
                        <i class="fa-solid fa-eye tog"></i>
                    </div>
    
                    <label for="cpass">Confirm Password</label>
                    <input type="password" name="cpass" id="cpass" required>
                    <p id="validate"></p>
                </div>
            </div>
            

            <input type="submit" name="register" value="Register">

            <p>Haven't any account <a href="./login.php">Login now</a></p>

            <p><a href="./index.php">Back to home</a></p>
        </form>
    </section>
    <!-- registration end -->


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
        });


        const cpass = document.getElementById("cpass");
        
        cpass.addEventListener("keyup", () => {
            const pass = document.getElementById("pass");
            const validate = document.getElementById("validate")
            if(pass.value == cpass.value){
                validate.innerHTML = "";
            }else{
                validate.innerHTML = "Password not matching!!";
            }

        })
    </script>
    <!-- js end -->
</body>
</html>