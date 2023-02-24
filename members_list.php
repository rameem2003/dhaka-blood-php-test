<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Members || Dhaka Blood Bank</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

    <!-- local css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <!-- header -->
    <?php include './header.php' ?>
    <!-- header end -->

    <!-- members -->
    <div id="members">
        <div class="container">
            <h1 class="title center">Our Volunteers</h1>

            <div class="search_engine">
                <h2>Search Blood Donor by</h2>
                <div class="row">
                    <div class="left">
                        <p>Blood Group</p>
                        <select name="" id="blood" oninput="searchBlood()">
                            <option value="" selected disabled>---Select Blood Group---</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </div>


                    <div class="middle">
                        <p>OR</p>
                    </div>

                    <div class="right">
                        <p>Location</p>
                        <!-- <input type="text" name="" id="location" oninput="searchLocation()" placeholder="Enter location"> -->
                        <select name="" id="location" oninput="searchLocation()">
                            <option value="" selected disabled>---Select Location---</option>
                            <?php 
                            include './include/configuration.php';

                            $get_all_location = mysqli_query($conn, "SELECT * FROM `donors`");
                            if(mysqli_num_rows($get_all_location) > 0){
                                while($location = mysqli_fetch_assoc($get_all_location)){
                                    ?>
                                        <option value="<?php echo $location['location'] ?>"><?php echo $location['location'] ?></option>
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="members-box">


                <?php


                include './include/configuration.php';

                $load_card_query = "SELECT * FROM `donors`";

                $run = mysqli_query($conn, $load_card_query);

                if (mysqli_num_rows($run) > 0) {
                    while ($row = mysqli_fetch_assoc($run)) {

                ?>

                        <div class="profile" data-blood="<?php echo $row['blood']; ?>" data-location="<?php echo $row['location'] ?>">
                            <div class="pro-avater">
                                <img src="<?php echo './upload_img/' . $row['photo']; ?>" alt="">

                                <div class="blood"><?php echo $row['blood'] ?></div>
                            </div>

                            <div class="pro-name">
                                <h4><?php echo $row['f_name'] . " " . $row['l_name']; ?></h4>
                            </div>

                            <div class="location-blood-date">
                                <p><i class="fa-solid fa-location-dot"></i> <?php echo $row['location'] ?></p>
                                <!-- <p><i class="fa-solid fa-droplet"></i> <?php echo $row['donate_date'] ?></p> -->
                            </div>

                            <div class="link">
                                <ul>
                                    <li><a href="tel: <?php echo $row['phone'] ?>"><i class="fa-solid fa-phone"></i></a></li>

                                    <li><a href="<?php echo $row['fb'] ?>" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>

                                    <li><a href="mailto: <?php echo $row['email'] ?>"><i class="fa-solid fa-envelope"></i></a></li>
                                </ul>
                            </div>

                            <div class="call">
                                <a href="tel: <?php echo $row['phone'] ?>"><i class="fa-solid fa-phone"></i> Call</a>
                                <a href="./view_profile.php?viewProfile=<?php echo $row['id'] ?>"><i class="fa-solid fa-eye"></i> View</a>
                            </div>
                        </div>


                <?php


                    }
                } else {
                    echo "NO DATA FOUND";
                }




                ?>

            </div>
        </div>
    </div>
    <!-- members end -->

    <!-- footer -->
    <?php include './footer.php' ?>
    <!-- footer end -->

    <!-- local js -->
    <script src="./js/search_engine.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>

    