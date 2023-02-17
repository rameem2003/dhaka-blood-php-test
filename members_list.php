    <!-- members -->
    <div id="members">
        <div class="container">
            <h1 class="title center">Our Volunteers</h1>

            <div class="members-box">


                <?php


                include './include/configuration.php';

                $load_card_query = "SELECT * FROM `donors`";

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
        </div>
    </div>
    <!-- members end -->