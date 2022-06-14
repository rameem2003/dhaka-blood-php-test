<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhaka Blood Bank</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

    <!-- local css -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        #banner .blur{
            height: 50vh;
        }
    </style>
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <img src="./img/logo.png" alt="logo">
                </a>

                <button id="tog_menu"><i class="fa-solid fa-bars-staggered"></i></button>                
            </div>
            <nav id="menu">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./index.php#about">About</a></li>
                    <li><a href="./index.php#members">Our volunteers</a></li>
                    <li><a href="./register.php">Join us</a></li>
                    <li><a href="./login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- header end -->

    <!-- banner -->
    <section id="banner">
        <div class="blur">
            <div class="container">
                <h1>Let's see our members</h1>
            </div>
        </div>
    </section>
    <!-- banner end -->


    <!-- members -->
    <div id="members">
        <div class="container">
            <h1 class="title center">Our Volunteers</h1>

            <div class="members-box">


            <?php 


                include './include/configuration.php';

                $load_card_query = "SELECT * FROM `donors`";

                $run = mysqli_query($conn, $load_card_query);

                if(mysqli_num_rows($run) > 0){
                    while($row = mysqli_fetch_assoc($run)){

                        ?>

                            <div class="profile">
                                <div class="pro-avater">
                                    <img src="<?php echo './upload_img/'.$row['photo']; ?>" alt="">

                                    <div class="blood"><?php echo $row['blood'] ?></div>
                                </div>

                                <div class="pro-name">
                                    <h4><?php echo $row['f_name'] . " " . $row['l_name']; ?></h4>
                                </div>

                                <div class="location-blood-date">
                                    <p><i class="fa-solid fa-location-dot"></i> <?php echo $row['location'] ?></p>
                                    <p><i class="fa-solid fa-droplet"></i> <?php echo $row['donate_date'] ?></p>
                                </div>

                                <div class="link">
                                    <ul>
                                        <li><a href="tel: <?php echo $row['phone'] ?>"><i class="fa-solid fa-phone"></i></a></li>

                                        <li><a href="<?php echo $row['fb'] ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>

                                        <li><a href="mailto: <?php echo $row['email'] ?>"><i class="fa-solid fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>


                    <?php


                    }
                }else{
                    echo "NO DATA FOUND";
                }




            ?>

            </div>
        </div>
    </div>
    <!-- members end -->


    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="box">
                    <div class="flex">
                        <div class="left">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="right">
                            <p>Call us</p>
                            <p>+8801409029641</p>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <div class="flex">
                        <div class="left">
                            <i class="fa-solid fa-envelope-open-text"></i>
                        </div>
                        <div class="right">
                            <p>Email us</p>
                            <p>contact@yourmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="box">
                    <p class="link-text">Let's Connect</p>
                    <ul>
                        <li><a href=""><i class="fa-brands fa-facebook-square"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-twitter-square"></i></a></li>
                        <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                    </ul>
                </div>


                <div class="box">
                    <div class="flex">
                        <div class="left img">
                            <img src="./img/logo.png" alt="">
                        </div>
                        <div class="right des">
                            <h3>Dhaka Blood Bank</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, illum.</p>
                        </div>
                    </div>
                </div>


                <div class="box">
                    <p>Developed by:</p>
                    <h3>Mahmood Hassan Rameem</h3>
                    <h4>01409029641</h4>
                </div>

            </div>
        </div>
    </footer>
    <!-- footer end -->


    <!-- local js -->
    <script src="./js/main.js"></script>
</body>
</html>