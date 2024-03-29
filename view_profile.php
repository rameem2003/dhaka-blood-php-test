<?php 

    include './include/configuration.php';
    if(isset($_GET['viewProfile'])){
        $profile_id = $_GET['viewProfile'];
        $run_profile_qurey = "SELECT * FROM `donors` WHERE id = '$profile_id'";
        $run_query = mysqli_query($conn, $run_profile_qurey);

        if(mysqli_num_rows($run_query) > 0){
            $row = mysqli_fetch_assoc($run_query);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile || <?php echo $row['f_name'] . " " . $row['l_name'] ?></title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

    <!-- local css -->
    <link rel="stylesheet" href="./css/profile.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <section id="wrapper">
        <div class="title">
            <h1 id="greetings"></h1> &nbsp;
            <h1> <?php echo $row['u_name']; ?></h1>
        </div>

        <div class="photo">
            <img src="<?php echo './upload_img/'.$row['photo']; ?>" alt="">

            <span class="blood"><?php echo $row['blood'] ?></span>
        </div>

        <div class="name_details">
            <h1><?php echo $row['f_name'] . " " . $row['l_name'] ?></h1>
            <h2><i class="fa-solid fa-location-dot"></i> <?php echo $row['location'] ?></h2>
        </div>

        <div class="others_details">
            <div class="box">
                <h3>Phone</h3>
                <hr>
                <p><?php echo $row['phone'] ?></p>
            </div>

            <div class="box">
                <h3>Email</h3>
                <hr>
                <p><a href="mailto: <?php echo $row['email'] ?>"><?php echo $row['email'] ?></a></p>
            </div>

            <div class="box">
                <h3>Facebook</h3>
                <hr>
                <p><a href="<?php echo $row['fb'] ?>"><?php echo $row['fb'] ?></a></p>
            </div>

            <div class="box">
                <h3>Date of Birth</h3>
                <hr>
                <p><?php echo $row['dob'] ?></p>
            </div>

            <div class="box">
                <h3>Last Blood Donation Date</h3>
                <hr>
                <p><?php echo $row['donate_date'] ?></p>
            </div>
        </div>

        <?php

            if($row['gender'] == "male"){
                $print_gender = "Him";
            }else{
                $print_gender = "Her";
            }
        
        ?>

        <div class="call">
            <a href="tel: <?php echo $row['phone'] ?>"><i class="fa-solid fa-phone"></i> Call <?php echo $print_gender ?></a>
        </div>

        <!-- <div class="btns">
            <a class="edit edit-color" href="./update_profile.php"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            <a class="logout logout-color" href="profile.php?logout=<?php echo $user_id; ?>"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </div> -->
    </section>


    <!-- js -->
    <script src="./js/greetings.js"></script>
</body>
</html>