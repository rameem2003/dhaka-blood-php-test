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


?>


<?php 
            
    $load_profile = "SELECT * FROM `donors` WHERE id = '$user_id'";

    $run_query = mysqli_query($conn, $load_profile);

    if(mysqli_num_rows($run_query)){
        $row = mysqli_fetch_assoc($run_query);
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
                <h3>Last Blood Date</h3>
                <hr>
                <p><?php echo $row['donate_date'] ?></p>
            </div>
        </div>

        <div class="btns">
            <a class="edit edit-color" href="./update_profile.php"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
            <a class="logout logout-color" href="profile.php?logout=<?php echo $user_id; ?>"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
        </div>
    </section>


    <!-- js -->
    <script src="./js/greetings.js"></script>
</body>
</html>