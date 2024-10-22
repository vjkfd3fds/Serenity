<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <title>MindScape Player</title>
</head>

<body>
    <div class="menu_section">
        <a class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
        <div class="details">
            <table class="">
                <tr>
                    <th>
                        <a href="#" style="text-decoration: none; color: black;">
                            <table class="menu_options">
                                <tr>
                                    <td class="menu_img" width="45%"><img src="images/chat.png"></td>
                                    <td><p>Chat with me</p></td></a>
                                </tr>
                            </table>
                        </a>
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="yogaSection.html" style="text-decoration: none; color: black;">
                            <table class="menu_options">
                                <tr>
                                    <td class="menu_img" width="45%"><img src="images/yoga.png"></td>
                                    <td><p>Yoga</p></td></a>
                                </tr>
                            </table>
                        </a>
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="gameSection.html" style="text-decoration: none; color: black;">
                            <table class="menu_options">
                                <tr>
                                    <td class="menu_img" width="45%"><img src="images/game.png"></td>
                                    <td><p>Games for you</p></td></a>
                                </tr>
                            </table>
                        </a>
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="readingSection.html" style="text-decoration: none; color: black;">
                            <table class="menu_options">
                                <tr>
                                    <td class="menu_img" width="45%"><img src="images/reading.png"></td>
                                    <td><p>Reading Time</p></td></a>
                                </tr>
                            </table>
                        </a>
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="meditationSection.html" style="text-decoration: none; color: black;">
                            <table class="menu_options">
                                <tr>
                                    <td class="menu_img" width="45%"><img src="images/meditation.png"></td>
                                    <td><p>Meditation</p></td></a>
                                </tr>
                            </table>
                        </a>
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="music-player/index.php" style="text-decoration: none; color: black;">
                            <table class="menu_options">
                                <tr>
                                    <td class="menu_img" width="45%"><img src="images/music.png"></td>
                                    <td><p>Music</p></td></a>
                                </tr>
                            </table>
                        </a>
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="#" style="text-decoration: none; color: black;">
                            <table class="menu_options">
                                <tr>
                                    <td class="menu_img" width="45%"><img src="images/drawing.png"></td>
                                    <td><p>Paint with me</p></td></a>
                                </tr>
                            </table>
                        </a>
                    </th>
                </tr>
                <tr>
                    <th>
                        <a href="writingSpace.html" style="text-decoration: none; color: black;">
                            <table class="menu_options">
                                <tr>
                                    <td class="menu_img" width="45%"><img src="images/writing.png"></td>
                                    <td><p>writing Space</p></td></a>
                                </tr>
                            </table>
                        </a>
                    </th>
                </tr>
            </table>
        </div>
    </div>
<header>
    <!-- <div class="play_area">
        <a><img onclick="myFunction()" src="img/back.png" alt="" class="back"></a>
        <img class="Img" src="img/disc.png" alt="">
        
        <div class="master_play play_bar">
            <table width="100%">
                <tr>
                    <th width="70%">
                        <table>
                            <tr class="details">
                                <td style="text-align: left;">
                                    <h5 id="title">Vande Mataram<br />
                                        <div class="subtitle">Bankim Chandra</div>
                                    </h5>
                                </td>
                            </tr>
                        </table>
                    </th>
                    
                    <th width="30%">
                        <div class="icon">
                            <table width="100%" class="play_button">
                                <tr>
                                    <th><i class="bi bi-skip-start-fill" id="back"></i></th>
                                    <th><i class="bi pbi bi-play-fill" id="masterPlay"></i></th>
                                    <th><i class="bi bi-skip-end-fill" id="next"></i></th>
                                </tr>
                            </table>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th colspan="2" width="60%">
                        <table width="100%" class="play_bar_display">
                            <tr>
                                <th width="10%"><span class="time" id="currentStart">0:00</span></th>
                                <th width="90%">
                                    <div class="bar">
                                        <input type="range" id="seek" min="0" value="0" max="100">
                                        <div class="bar2" id="bar2"></div>
                                        <div class="dot"></div>
                                    </div>
                                </th>
                                <th width="20%"><span class="time id="currentEnd">0:00</span></th>
                            </tr>
                        </table>
                </tr>
            </table>
        </div>
        <div class="footer"></div>
    </div> -->



    
    <div class="song_side">
        <div class="content">
            <!-- <div onclick="myFunction()" class="pop_up">^</div> -->
            <a href="index.php"><img src="img/back.png" alt="" class="back"></a>
            <h1>Be Relax</h1>
            <!-- <div class="search">
                <input type="text" id="search" class="form-control" aria-describedby="passwordHelpInline" placeholder="   &#xF002; Search book" required>
            </div> -->
            <!-- <a onclick="myFunction()"><img src="img/menu.png" alt="" class="menu"></a> -->
        </div>
        <div class="popular_song">
            <div class="h4">
                <h4>Popular Song</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="pop_song">
                <li class="songItem">
                    <div class="img_play">
                        <img src="img1/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                    </div>
                    <h5 style="color: black;">On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img1/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="8"></i>
                        <!-- change All id  -->
                    </div>
                    <h5 style="color: black;">On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img1/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
                    </div>
                    <h5 style="color: black;">On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img1/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                    </div>
                    <h5 style="color: black;">On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img1/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="11"></i>
                    </div>
                    <h5 style="color: black;">On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
                <li class="songItem">
                    <div class="img_play">
                        <img src="img1/1.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                    </div>
                    <h5 style="color: black;">On My Way
                        <br>
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                </li>
            </div>
            
            <div class="h4">
                <h4>Recent Song</h4>
                <div class="btn_s">
                    <i id="left_scroll" class="bi bi-arrow-left-short"></i>
                    <i id="right_scroll" class="bi bi-arrow-right-short"></i>
                </div>
            </div>
            <div class="pop_song">
                <li class="songItem1">
                    <div class="img_play">
                        <img src="img1/7.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="7"></i>
                    </div>
                    <h5 style="color: black;">On My Way
                        <br>
                        <div class="subtitle">track 01</div>
                    </h5>
                </li>
                <li class="songItem1">
                    <div class="img_play">
                        <img src="img1/10.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="10"></i>
                    </div>
                    <h5 style="color: black;">On My Way
                        <br>
                        <div class="subtitle">track 10</div>
                    </h5>
                </li>
                <li class="songItem1">
                    <div class="img_play">
                        <img src="img1/12.jpg" alt="alan">
                        <i class="bi playListPlay bi-play-circle-fill" id="12"></i>
                    </div>
                    <h5 style="color: black;">On My Way
                        <br>
                        <div class="subtitle">track 12</div>
                    </h5>
                </li>
            </div>
        </div>
    </div>

    <div class="master_play">
        <table width="100%">
            <tr>
                <th width="70%">
                    <table>
                        <tr>
                            <th>
                                <div class="wave">
                                    <div class="wave1"></div>
                                    <div class="wave1"></div>
                                    <div class="wave1"></div>
                                </div>
                            </th>
                            <td>
                                <img src="img/26th.jpg" alt="Alan" id="poster_master_play">
                            </td>
                            <td style="text-align: left;">
                                <h5 id="title">Good Morning<br />
                                    <div class="subtitle">track 0</div>
                                </h5>
                            </td>
                        </tr>
                    </table>
                </th>
                
                <th width="30%">
                    <div class="icon">
                        <table width="100%">
                            <tr>
                                <!-- <th><i class="bi bi-skip-start-fill" id="back"></i></th> -->
                                <th><i class="bi bi-play-fill" id="masterPlay"></i></th>
                                <!-- <th><i class="bi bi-skip-end-fill" id="next"></i></th> -->
                                <th>
                                    <div class="vol">
                                        <i class="bi bi-volume-down-fill" id="vol_icon"></i>
                                        <input type="range" id="vol" min="0" value="30" max="100">
                                        <div class="vol_bar"></div>
                                        <div class="dot" id="vol_dot"></div>
                                    </div>
                                </th>
                            </tr>
                        </table>
                    </div>
                </th>
            </tr>
            <tr>
                <th colspan="2" width="60%">
                    <table width="100%">
                        <tr>
                            <th width="10%"><span id="currentStart">0:00</span></th>
                            <th width="90%">
                                <div class="bar">
                                    <input type="range" id="seek" min="0" value="0" max="100">
                                    <div class="bar2" id="bar2"></div>
                                    <div class="dot"></div>
                                </div>
                            </th>
                            <th width="20%"><span id="currentEnd">0:00</span></th>
                        </tr>
                    </table>
                </th>
            </tr>
        </table>
    </div>
</header>
    <script src="js/playlist1_js.js"></script>
</body>
</html>