<?php 
    if (!$_COOKIE['username']) {
        header('Location: login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../images/note.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="css/admin-home.css" type="text/css">
    <title>Serenity| Dashboard</title>
    <style>
        .logout,.material-icons-sharp {
            cursor: pointer;
        }
        .user-card-heading {
            text-align: center;
            margin-bottom: 20px; /* Add space below the heading */
        }
        /* Style for the user card container */
        .user-card-container {
            display: flex;
            flex-wrap: wrap;
        }

        /* Style for individual user cards */
        .user-card {
            width: 200px; /* Adjust the width as needed */
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            text-align: center;
        }

        /* Style for user avatars within user cards */
        .avatar-container {
            width: 80px; /* Adjust the width and height to create a circle */
            height: 80px;
            background-color: #f0f0f0; /* Background color for the circle */
            border-radius: 50%; /* Create a circle by setting border-radius to 50% */
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px; /* Center the circle */
        }

        .avatar-container img {
            max-width: 100%;
            border-radius: 50%; /* Ensure the image is also a circle */
        }

        /* Additional styles for the user card text (e.g., first name) */
        h2 {
            margin: 10px 0;
        }

    </style>
</head>

<body>

    <div class="container" style="padding: 25px;">

        <!-- Sidebar section start  -->
        <aside>

            

            <div class="sidebar">
                

                <a href="admin-home.html" id="" class="active">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Main</h3>

                </a>

                <a href="requests.php" id="">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    <h3>Requests</h3>
                </a>

                <a href="overview.php" id="">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Overview</h3>

                </a>

                <a href="report.php" id="">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Report</h3>

                </a>

                <a href="settings.php" id="">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Settings</h3>
                </a>

    
                <?php
                    if (isset($_COOKIE['username'])) {
                        $user_id = $_COOKIE['username'];
                        echo '
                        <a>
                        <span class="material-icons-sharp">
                            logout
                        </span>
                        <form method="post" action="admin-dashboard.php">
                        <h3><input type="submit" name="logout" value="Logout" class="logout"></h3>
                        </form>
                        </a>';
                    }
                    
                    if (isset($_POST['logout'])) {                        
                        setcookie("username", "", time() - 3600, "/");
                        header("Location: login.php");
                        exit;
                    }
                ?>

            </div>

        </aside>
        <!-- End of Sidebar Section-->

        <!-- Main Content-->
        <main>
            <h1>Analystics</h1>
            <!--Analystics-->

            <div class="analyse">
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Doctor Accounts</h3>
                            <?php 
                            include('../php/config.php');
                            $sql = "SELECT COUNT(*) FROM doctor_login";

                            $result = $conn->query($sql);
                            if ($result === false) {
                                echo $conn->error;
                            } else {
                                $row = $result->fetch_row();
                                $count = $row[0];
                            }
                            if ($count === 0) {
                                echo '<h1> No Accounts are created';
                            } else {
                                echo "<h1 style='text: align: center;'>" . $count . "</h1>";
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>User Accounts</h3>
                            <?php 
                            $sql = "SELECT COUNT(*) FROM users";

                            $result = $conn->query($sql);
                            if ($result === false) {
                                echo $conn->error;
                            } else {
                                $row = $result->fetch_row();
                                $count = $row[0];
                            }
                            if ($count === 0) {
                                echo '<h1> No Accounts are created';
                            } else {
                                echo "<h1 style='text: align: center;'>" . $count . "</h1>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Analists-->

            <!-- New users Section start-->

            <!--end of New user Section-->
        </main>
        <!-- End Of the Main Section-->

        <!--RIght Section-->
        <div class="right-section">

            <!--Nav section-->
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>

            </div>
            <!-- End of the nav Section-->

        </div>
        <!--End of the Nav Section-->

    </div>


    <script src="js/applies.js"></script>
    <script src="js/mainjs.js"></script>
</body>

</html>