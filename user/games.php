<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reading Section</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="js/script.js"></script>
</head>
<body style="height: 130vh;">
    
    <!-------------------------Book lists------------------------->
    <div class="welcome">
        <?php include ('navbar.php'); ?>

        <h3 class="rec" align="left" style="padding-left: 5%;">Recommended for you</h3>
        <table class="readingSection">
            <tr>
                <th style="width: 50%;">
                    <a href="games/clumsy-bird-master/index.html">
                        <div class="options">
                            <div class="top-right">
                                <div>
                                    <p style="max-width: 100%;" class="rdes">Clumsy Bird</p>
                                </div>
                                <br />
                            </div>
                        </div>
                    </a>
                </th>
                <th style="width: 50%;">
                    <a href="games/color-picker/color.html">
                        <div class="options">
                            <div class="top-right">
                                <div>
                                    <p style="max-width: 100%;" class="rdes">Color Picker</p>
                                </div>
                                <br />
                            </div>
                        </div>
                    </a>
                </th>
            </tr>
            <tr>
                <th style="width: 50%;">
                    <a href="games/snake-gamecss-renderer/dist/index.html">
                        <div class="options">
                            <div class="top-right">
                                <div>
                                    <p style="max-width: 100%;" class="rdes">Snake Game</p>
                                </div>
                                <br />
                            </div>
                        </div>
                    </a>
                </th>
                <th style="width: 50%;">
                    <a href="games/tower-blocks/dist/index.html">
                        <div class="options">
                            <div class="top-right">
                                <div>
                                    <p style="max-width: 100%;" class="rdes">Tower Blocks</p>
                                </div>
                                <br />
                            </div>
                        </div>
                    </a>
                </th>
            </tr>
        </table>
        
        <div class="welcome_footer footer_b">
        </div>
    </div>
</body>
</html>