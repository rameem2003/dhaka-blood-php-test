<?php 

    include './include/configuration.php';
    session_start();

    $admin_id = $_SESSION['admin_id'];

    // load all doners
    $load_doners_info = "SELECT * FROM `donors`";

    $run = mysqli_query($conn, $load_doners_info);

    $total_rows = mysqli_num_rows($run);


    // print admin name
    $load_admin_name = "SELECT * FROM `admin` WHERE id = '$admin_id'";

    $run_query = mysqli_query($conn, $load_admin_name);

    if(mysqli_num_rows($run_query)){
        $admin_name = mysqli_fetch_assoc($run_query);
    }


    // if admin name not found in db
    if(!isset($admin_id)){
        header('location:admin-login.php');
    }

    // if admin press logout
    if(isset($_GET['logout'])){
        session_destroy();
        unset($admin_id);
        header("location:./");
    }

    // delete record

    if(isset($_GET['dl'])){
        $delete_row = $_GET['dl'];
        $delete_query = "DELETE FROM `donors` WHERE id='$delete_row'";
        mysqli_query($conn, $delete_query);
        header("location:dashboard.php");
    }



?>

<!-- add new admin -->
<?php 

    include './include/configuration.php';

    if(isset($_POST['admin_reg'])){
        $new_admin_user = $_POST['new_admin_user'];
        $new_admin_pass = $_POST['new_admin_pass'];

        $add_admin = "INSERT INTO `admin`(admin_user, admin_password) VALUES ('$new_admin_user','$new_admin_pass')";

        if(mysqli_query($conn, $add_admin)){
            echo '<script> alert("New Admin Added Successfully"); </script>';

            header("location:dashboard.php");
        }else{
            echo '<script> alert("Somtding Wrong Admin !!!"); </script>';
        }

        


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Dashboard || Dhaka Blood Bank</title>
    <link rel="shortcut icon" href="./img/logo.png" type="image/x-icon">

    <!-- local css -->
    <link rel="stylesheet" href="./css/dashboard.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="wrapper">
        <button id="addAdminBtn"><i class="fa-solid fa-user"></i> Add Admin</button>
        <div class="logout">
            <a href="dashboard.php?logout=<?php echo $admin_id ?>"><i class="fa-solid fa-right-from-bracket"></i> Logout dashboard</a>
        </div>
        <div class="title">
            <h1>Dhaka Blood Bank</h1>
            <h2>Dashboard</h2>
        </div>

        <div class="admin_name">
            <h2>Welcome Admin <?php echo $admin_name['admin_user'] ?></h2>
        </div>


        <div class="list">
            <div class="list_head">
                <span class="list_title">List of blood doner's</span>
                <span class="total">Total doner's <?php echo $total_rows ?></span>
            </div>




            <table>
                <thead>
                    <tr>
                        <td>S.N</td>
                        <td>Name</td>
                        <td>User name</td>
                        <td>Phone</td>
                        <td>Location</td>
                        <td>Blood</td>
                        <td>Email</td>
                        <td>Action</td>
                    </tr>
                </thead>


                <tbody>
                    <?php

                        if(mysqli_num_rows($run) > 0){
                            while($row = mysqli_fetch_assoc($run)){
                                ?>
                                    <tr>
                                        <td><?php echo $row['id']; ?></td>
                                        <td><?php echo $row['f_name'] . " " . $row['l_name']; ?></td>
                                        <td><?php echo $row['u_name']; ?></td>
                                        <td><?php echo $row['phone']; ?></td>
                                        <td><?php echo $row['location']; ?></td>
                                        <td><?php echo $row['blood'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td><a class="trash" href="dashboard.php?dl=<?php echo $row['id'] ?>"><i class="fa-solid fa-trash"></i></a> &nbsp; <a class="trash" target="_blank" href="./view_profile.php?viewProfile=<?php echo $row['id']; ?>"><i class="fa-solid fa-eye"></i></a> </td>
                                    </tr>

                                <?php
                            }
                        }else{
                            echo "Not found";
                        }
                    
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <section id="admin_regi">
        <form action="" method="post">
            <h1>Create a new admin</h1>
            <button id="closeBtn"><i class="fa-solid fa-circle-xmark"></i></button>
            <input type="text" name="new_admin_user" id="" placeholder="Create admin user name">
            <input type="text" name="new_admin_pass" id="" placeholder="Create password">
            <input type="submit" name="admin_reg" value="Create Account">
        </form>
    </section>




    <script>
        const addAdminBtn = document.getElementById("addAdminBtn");
        const closeBtn = document.getElementById("closeBtn");

        addAdminBtn.addEventListener("click", () => {
            const admin_regi = document.getElementById("admin_regi");
            const wrapper = document.querySelector(".wrapper");
            admin_regi.classList.toggle("expand");
            wrapper.classList.toggle("blur");
        });

        closeBtn.addEventListener("click", () => {
            const admin_regi = document.getElementById("admin_regi");
            const wrapper = document.querySelector(".wrapper");
            admin_regi.classList.remove("expand");
            wrapper.classList.remove("blur");
            
        });
    </script>


</body>
</html>