<?php

include './include/configuration.php';

if(isset($_POST['request'])){
    $name = $_POST['name'];
    $hospital = $_POST['hospital'];
    $phone = $_POST['phone'];
    $unit = $_POST['unit'];
    $blood = $_POST['blood'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $area = $_POST['area'];
    $address = $_POST['address'];

    $send_request = "INSERT INTO `request`(name, hospital, phone, unit, blood_group, date, `time`, area, address) VALUES ('$name','$hospital','$phone','$unit','$blood','$date','$time','$area','$address')";

    mysqli_query($conn, $send_request);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dhaka Blood Bank || Home || Mahmood Hassan Rameem</title>
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
    <?php include './header.php'; ?>
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
                        <h1 class="title">Why give blood ?</h1>
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
                    <h1 class="title">Why You Donate Blood ?</h1>

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

                $load_card_query = "SELECT * FROM `donors` LIMIT 6";

                $run = mysqli_query($conn, $load_card_query);

                if (mysqli_num_rows($run) > 0) {
                    while ($row = mysqli_fetch_assoc($run)) {

                ?>

                        <div class="profile">
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

            <a class="btn" href="./members_list.php">View More <i class="fa-solid fa-share-from-square"></i></a>
        </div>
    </div>
    <!-- members end -->

    <!-- current request -->
    <div class="current">
        <div class="container">
            <h1 class="title center">Current blood request</h1>

            <div class="allRequest">
                <?php 
                include './include/configuration.php';

                $fetch_request = mysqli_query($conn, "SELECT * FROM `request`");
                if(mysqli_num_rows($fetch_request) > 0){
                    while($fetch_row = mysqli_fetch_assoc($fetch_request)){
                        ?>
                        <li><p><?php echo $fetch_row['id'] ?>. <?php echo $fetch_row['blood_group'] ?> <?php echo $fetch_row['name'] ?> <?php echo $fetch_row['phone'] ?> (<?php echo $fetch_row['unit'] ?> bag blood needed) - (<?php echo $fetch_row['time'] ?>) <?php echo $fetch_row['date'] ?> at <?php echo $fetch_row['area'] ?>.</p></li>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- current request end -->


    <!-- request for blood -->
    <div class="request">
        <div class="container">
            <h1 class="title center">Request for blood</h1>

            <div class="row">
                <div class="left">
                    <img src="./img/undraw_navigation_re_wxx4.svg" alt="">
                </div>
                <div class="right">
                    <form action="" method="post">
                        <div class="form-row">
                            <label for="">Patient Name *</label>
                            <input type="text" name="name" id="" required>
                        </div>

                        <div class="form-row">
                            <label for="">Hospital Name *</label>
                            <input type="text" name="hospital" id="" required>
                        </div>

                        <div class="form-row">
                            <label for="">Phone Number *</label>
                            <input type="text" name="phone" id="" required>
                        </div>

                        <div class="form-row">
                            <label for="">Unit / Blood Bag ? *</label>
                            <input type="number" name="unit" id="" required>
                        </div>

                        <div class="form-row">
                            <label for="">Blood Gruop *</label>
                            <select name="blood" id="" required>
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


                        <div class="form-row">
                            <label for="">Donation Date *</label>
                            <input type="date" name="date" id="" required>
                        </div>

                        <div class="form-row">
                            <label for="">Donation Time *</label>
                            <input type="time" name="time" id="" required>
                        </div>

                        <div class="form-row">
                            <label for="">Area (Currently Only Dhaka North City ) *</label>
                            <!-- <input type="text" name="area" id="" required> -->
                            <select name="area" id="area_select"></select>
                        </div>

                        <div class="form-row">
                            <label for="">Address *</label>
                            <input type="text" name="address" id="" required>
                        </div>

                        <input type="submit" name="request" value="Request For Blood">
                    </form>
                </div>
            </div>


        </div>
    </div>
    <!-- request for blood end -->


    <!-- footer -->
    <?php include './footer.php' ?>
    <!-- footer end -->


    <!-- local js -->
    <script src="./js/main.js"></script>
    <script src="./js/area.js"></script>
</body>
</html>