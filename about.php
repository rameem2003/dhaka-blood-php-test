<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Developer</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

    <!-- local css -->
    <link rel="stylesheet" href="./css/about.css">
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


    <!-- developer -->
    <div id="wrapper">
        <div class="head">
            <h1>Dhaka Blood Bank Site Developer</h1>
        </div>

        <div class="profiles">

            <div class="profile">
                <div class="img">
                    <div class="box">
                        <img src="./img/rameem_edit.jpg" alt="rameem">
                    </div>
                </div>
    
                <div class="details">
                    <h3>Mahmood Hassan Rameem</h3>
                    <p class="tag">Computer Technology</p>
                    <p>Project Owner</p>
                    <div class="progress">
                        <p>HTML 100%</p>
                        <progress id="file" value="100" max="100"></progress>
                        <p>CSS 90%</p>
                        <progress id="file" value="90" max="100"></progress>
                        <p>JavaScript 60%</p>
                        <progress id="file" value="60" max="100"></progress>
                        <p>PHP 40%</p>
                        <progress id="file" value="40" max="100"></progress>
                    </div>
                </div>
            </div>


            <div class="profile">
                <div class="img">
                    <div class="box">
                        <img src="https://rameem2003.github.io/oursite/img/gallery/fahmida.jpg" alt="fahmida">
                    </div>
                </div>
    
                <div class="details">
                    <h3>Fahmida Yeasmin</h3>
                    <p class="tag">Computer Technology</p>
                    <p>Associate Partner</p>
                    <div class="progress">
                        <p>HTML 100%</p>
                        <progress id="file" value="100" max="100"></progress>
                        <p>CSS 90%</p>
                        <progress id="file" value="90" max="100"></progress>
                        <p>JavaScript 40%</p>
                        <progress id="file" value="40" max="100"></progress>
                        <p>PHP 30%</p>
                        <progress id="file" value="30" max="100"></progress>
                    </div>
                </div>
            </div>
        </div>


        <div class="github">
            <div class="img">
                <img src="https://miro.medium.com/max/719/0*LqBi2dONH28oTKVX.png" alt="">
            </div>
            <div class="text">
                <h1>Project Managed by</h1>
                <h1>GITHUB</h1>
                <a target="_blank" href="https://github.com/rameem2003/dhaka-blood-php-test">Go To Repository</a>
            </div>
        </div>
    </div>
    <!-- developer end -->

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