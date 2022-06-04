<?php 

    include './include/configuration.php';

    session_start();
    $user_id = $_SESSION['user_id'];

    if(!isset($user_id)){
        header("location:login.php");
    }

    if(isset($_GET['logout'])){
        session_destroy();
        unset($user_id);
        header("location:login.php");
    }


    if(isset($_POST['update'])){
        $update_fname = $_POST['fname'];
        $update_lname = $_POST['lname'];
        $update_dob = $_POST['dob'];
        $update_loc = $_POST['loc'];
        $update_last_blood = $_POST['last_blood'];
        $update_blood = $_POST['blood'];
        $update_phone = $_POST['phone'];
        $update_fb = $_POST['fb'];
        $update_email = $_POST['email'];
        $old_pass = $_POST['old_pass'];
        $old_input_pass = $_POST['old_input_pass'];
        $new_pass = $_POST['pass'];


        $update_image = $_FILES['image']['name'];
        $update_image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'upload_img/'.$update_image;
        $old_photo = $_POST['old_photo'];

        if($old_pass != $old_input_pass){
            $msg[] = "Old password not matched!";
        }

        elseif($update_image == ""){
            $update_image = $old_photo;

            $update_qurey = "UPDATE `donors` SET f_name = '$update_fname', l_name = '$update_lname', dob = '$update_dob', location = '$update_loc', donate_date = '$update_last_blood', blood = '$update_blood', photo = '$update_image', phone = '$update_phone', fb = '$update_fb', email = '$update_email', password = '$new_pass' WHERE id = '$user_id'";

            mysqli_query($conn, $update_qurey);

            move_uploaded_file($update_image_tmp_name, $image_folder);

            $msg[] = "Update successfull";
        }
        
        else{
            $update_qurey = "UPDATE `donors` SET f_name = '$update_fname', l_name = '$update_lname', dob = '$update_dob', location = '$update_loc', donate_date = '$update_last_blood', blood = '$update_blood', photo = '$update_image', phone = '$update_phone', fb = '$update_fb', email = '$update_email', password = '$new_pass' WHERE id = '$user_id'";

            mysqli_query($conn, $update_qurey);

            move_uploaded_file($update_image_tmp_name, $image_folder);

            $msg[] = "Update successfull";
        }

        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
    <!-- profile -->
    <section id="update_profile">
        <?php 
            
            $load_profile = "SELECT * FROM `donors` WHERE id = '$user_id'";

            $run_query = mysqli_query($conn, $load_profile);

            if(mysqli_num_rows($run_query)){
                $row = mysqli_fetch_assoc($run_query);
            }
        
        ?>

        <form action="" method="post" enctype="multipart/form-data">
            <?php 
            
                if(isset($msg)){
                    foreach($msg as $msg){
                        echo '<div class="msg">' . $msg . '</div>';
                    }
                }
        
            ?>
            <div class="flex">
                <div class="left">
                    <img name="profile_img" src="<?php  echo './upload_img/'.$row['photo']; ?>" alt="">

                </div>

                <div class="right">
    
                    <label for="uname">First name:</label>
                    <input type="text" name="fname" id="fname" value="<?php echo $row['f_name'] ?>">

                    <label for="uname">Last name:</label>
                    <input type="text" name="lname" id="fname" value="<?php echo $row['l_name'] ?>">

                    <label for="dob">Date of birth:</label>
                    <input type="date" name="dob" id="dob" value="<?php echo $row['dob'] ?>">


                    <label for="loc">Location:</label>
                    <input type="text" name="loc" id="loc" value="<?php echo $row['location'] ?>">

                    <label for="last_blood">Last blood donate date:</label>
                    <input type="date" name="last_blood" id="last_blood" value="<?php echo $row['donate_date'] ?>">
    
                    <label for="blood">Blood group:</label>
                    <input type="text" name="blood" id="blood" value="<?php echo $row['blood'] ?>">


                    <label for="img">Upload photo</label>
                    <input type="file" value="<?php echo $row['photo'] ?>" name="image" id="" accept="image/jpeg, image/png, image/jpg">

                    <input type="hidden" name="old_photo" value="<?php echo $row['photo'] ?>">


                    
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" value="<?php echo $row['phone'] ?>">

                    <label for="fb">Facebook link:</label>
                    <input type="text" name="fb" id="fb" value="<?php echo $row['fb'] ?>">


                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>">


                    <label for="old_input_pass">Old Password</label>
                    <div class="password">
                        <input type="password" name="old_input_pass" id="old_pass" placeholder="">
                        <input type="hidden" name="old_pass" id="" value="<?php echo $row['password'] ?>">
                    </div>


                    <label for="pass">Create Password</label>
                    <div class="password">
                        <input type="password" name="pass" id="pass" placeholder="">
                        <i class="fa-solid fa-eye tog"></i>
                    </div>
    
                    <label for="cpass">Confirm Password</label>
                    <input type="password" name="cpass" id="cpass">
                    <p id="validate"></p>
                </div>
            </div>
            

            <div class="btn">
                <a id="logout" name="logout" href="profile.php?logout=<?php echo $user_id; ?>">Logout</a>
                <input id="update" name="update" type="submit" value="Update">
            </div>

        </form>
    </section>
    <!-- profile end -->


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
            const update_btn = document.getElementById("update");

            const validate = document.getElementById("validate")
            if(pass.value == cpass.value){
                validate.innerHTML = "";
                update_btn.style.display = "block";
            }else{
                validate.innerHTML = "Password not matching!!";
                update_btn.style.display = "none";
            }

        })
    </script>
    <!-- js end -->
</body>
</html>