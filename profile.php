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
    <section id="profile">
        <?php 
            
            $load_profile = "SELECT * FROM `donors` WHERE id = '$user_id'";

            $run_query = mysqli_query($conn, $load_profile);

            if(mysqli_num_rows($run_query)){
                $row = mysqli_fetch_assoc($run_query);
            }
        
        ?>
        <h1 class="title">Hello <?php echo $row['f_name'] . " " . $row['l_name'] ?></h1>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="flex">
                <div class="left">
                    <img src="<?php echo './upload_img/'.$row['photo']; ?>" alt="">
                </div>

                <div class="right">
    
                    <label for="uname">User name: <?php echo $row['u_name'] ?></label>

                    <label for="dob">Date of birth: <?php echo $row['dob'] ?></label>


                    <label for="loc">Location: <?php echo $row['location'] ?></label>

                    <label for="last_blood">Last blood donate date: <?php echo $row['donate_date'] ?></label>
    
                    <label for="blood">Blood group: <?php echo $row['blood'] ?></label>

                    <label for="phone">Phone: <?php echo $row['phone'] ?></label>


                    <label for="email">Email: <?php echo $row['email'] ?></label>
                </div>
            </div>
            

            <div class="btn">
                <a id="logout" name="logout" href="profile.php?logout=<?php echo $user_id; ?>">Logout</a>
                <a id="edit" href="./update_profile.php">Edit</a>
            </div>

        </form>
    </section>
    <!-- profile end -->
</body>
</html>