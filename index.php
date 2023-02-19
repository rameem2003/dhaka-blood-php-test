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
    <?php include './members_list.php' ?>
    <!-- members end -->


    <!-- footer -->
    <?php include './footer.php' ?>
    <!-- footer end -->


    <!-- local js -->
    <script src="./js/main.js"></script>
</body>
</html>