<?php 

    include './include/configuration.php';

    if(isset($_POST['register'])){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $uname = $_POST["uname"];
        $dob = $_POST["dob"];
        $gender = $_POST['gender'];
        $loc = $_POST["loc"];
        $last_blood = $_POST["last_blood"];
        $blood = $_POST["blood"];
        $phone = $_POST["phone"];
        $fb = $_POST["fb"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $cpass = $_POST["cpass"];

        $image = $_FILES['image']['name'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'upload_img/'.$image;

        $insert_data = "INSERT INTO `donors` (f_name, l_name, u_name, dob, location, donate_date, blood, photo, phone, fb, email, password, gender) VALUES('$fname', '$lname', '$uname', '$dob', '$loc', '$last_blood', '$blood', '$image', '$phone', '$fb', '$email', '$pass', '$gender')";


        move_uploaded_file($image_tmp_name, $image_folder);


        if(mysqli_query($conn, $insert_data)){
            header("location:index.php");
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
    <link rel="stylesheet" href="./css/header.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        #register{
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

                    <label for="gender">Gender</label>
                    <select name="gender" id="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>

                    
                </div>

                <div class="middle">
                    <label for="loc">Location</label>
                    <!-- <input type="text" name="loc" id="loc" required> -->
                    <select name="loc" id="loc" required></select>

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

                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" required>
                </div>
    
                <div class="right">
                    
                    <label for="fb">Facebook link</label>
                    <input type="text" name="fb" id="fb" required>

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

            <p><a href="./">Back to home</a></p>
        </form>
    </section>
    <!-- registration end -->

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

        fetch('js/area.json').then(response => response.json()).then(data => {
            let area_select_registerpage = document.getElementById("loc");
            let option = "";
            let allArea = data.area.sort();

            for(a = 0; a<allArea.length; a++){
                option = option + `<option value="${allArea[a]}">${allArea[a]}</option>`;

            }

            area_select_registerpage.innerHTML = option;
        })
    </script>
    <script src="./js/main.js"></script>
    <!-- js end -->
</body>
</html>