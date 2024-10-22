<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <title>Serenity | Music</title>

    <style>
        table tr th img{
            width: 60%;
        }

        table tr th{
            padding-bottom: 5%;
        }
        
        table {
            margin-top: 10%;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
<header>
    <div class="song_side">
        <div class="content">
            <a href="../home.php"><img src="img/back.png" alt="" class="back"></a>
            <h1>Find Song Be Relax</h1>
            <!-- <div class="search">
                <input type="text" id="search" class="form-control" aria-describedby="passwordHelpInline" placeholder="   &#xF002; Search..." required>
            </div> -->
            <!-- <img src="img/menu.png" alt="" class="menu"> -->

            <div class="dashboard">
                <table>
                    <th colspan="2"><h1 style="font-size: 18px;">Popular Playlists</h1></tr>
                    <tr>
                        <th width="33%">
                            <a href="Playlist1.php">                                
                                <img style="border-radius: 20px; width: 80%;" src="img/1.jpg" alt="">
                                <p>Mind Relaxing</p>
                            </a>
                        </th>
                        
                        <th width="33%">
                            <a href="playlist2.php">                                
                                <img style="border-radius: 20px; width: 80%;" src="img/2.jpg" alt="">
                                <p>Deep focus</p>
                            </a>
                        </th>
                        <th width="33%">
                            <a href="playlist3.php">                                
                                <img style="border-radius: 20px; width: 80%;" src="img/3.jpg" alt="">
                                <p>Chilling</p>
                            </a>
                        </th>
                    </tr>
                </table>
            </div>  
        </div> 
        <!-- <img style="width: 100%; position: fixed; bottom: 0px; left: 0px;" src="img/footer.jpg" alt="">     -->
    </div>
</header>
    <script src="js/app.js"></script>
</body>

</html>