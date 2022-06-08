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
                    <li><a href="#about">About</a></li>
                    <li><a href="#members">Our volunteers</a></li>
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
                <h1>Donate Blood To Save Life</h1>
                <p>Blood donation is a work of virtue or reward from the norm. Saving the life of one human being is as great a task as saving the life of the entire human race.</p>
    
                <a href="./register.php">Join Now</a>
            </div>
        </div>
    </section>
    <!-- banner end -->


    <!-- about -->
    <section id="about">
        <div class="container">
            <div class="card-box">
                <div class="card">
                    <div class="card-img">
                        <img src="./img/blood_1.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <h1 class="title">Become a Donor</h1>
                        <p class="sub-title">In developed countries, most of the blood donors are voluntary blood donors who donate blood out of social responsibility.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="./img/blood_2.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <h1 class="title">Why give blood</h1>
                        <p class="sub-title">Blood donation is extremely beneficial for health. As soon as the blood is donated, the bone marrow in the body is stimulated to produce new cells, and within 2 weeks of the blood donation, new blood cells are born and the deficiency is filled.</p>
                    </div>
                </div>

                <div class="card">
                    <div class="card-img">
                        <img src="./img/blood_3.jpg" alt="">
                    </div>
                    <div class="card-text">
                        <h1 class="title">Donation Helps</h1>
                        <p class="sub-title">Most blood donors donate blood for social work, but some people are professional blood donors, meaning they donate blood for money or an allowance. Again the blood donor can get blood for his future needs.</p>
                    </div>
                </div>
            </div>

            <div class="description">
                <div class="left">
                    <img src="./img/blood_community.png" alt="">
                </div>
                <div class="right">
                    <h1 class="title">We are Blood Donor Group</h1>

                    <p>There are no people available to donate blood these days "Please let those who wish to donate blood voluntarily! You can help get blood donors by adding your friends. May humanity win</p>

                    <a class="btn" href="https://www.facebook.com/groups/331521442397944" target="_blank">Join our group</a>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->


    <!-- benefit -->
    <section id="benefit">
        <div class="container">
            <div class="list">
                <div class="left">
                    <h1 class="title">Why You Donate Blood</h1>

                    <ol>
                        <li>
                            <h4>Reduce risk of heart attacks and liver cilment</h4>

                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolore ea assumenda dolores, animi ducimus!</p>
                        </li>

                        <li>
                            <h4>Lower the risk of cancer</h4>

                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis veritatis, laborum laudantium assumenda quasi ipsam.</p>
                        </li>

                        <li>
                            <h4>Speeds up healing process</h4>

                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, facere. Sint in at aperiam nihil!</p>
                        </li>
                    </ol>
                </div>
                <div class="right">
                    <img src="./img/blood.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- benefit end -->


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
                            <p>A Trusted Blood Donation Community in Bangladesh.</p>
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