<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serenity | Writing Section</title>
    <link rel="icon" type="image/x-icon" href="images/logo.png">

    <link rel="stylesheet" href="css/home.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="js/script.js"></script>
</head>

<body style="height: 100%;">    
    <!-------------------------Book lists------------------------->
    <div class="welcome">
        <?php include ('navbar.php'); ?>
        </div>
        
        <table style="margin-top: 10px;" width="100%" style="display: flex; flex-direction: column;">
            <tr style="display: flex; flex-direction:column;">
                <td>
                    <img src="images/header anim left.png" alt="Header animal" class="img">
                </td>
                <td width="50%" align="left" style="position: absolute; left: 50%; transform: translateX(-10%); top: 13rem;"><h2>Writing Space</h2></td>
                <td align="right">
                    <img width="30%" src="images/w hand.png" alt="Header animal" class="img">
                </td>
            </tr>
        </table>
        
        
        <div class="textSpace">
            <textarea class="notes" name="writingSpace" id="writingSpace" cols="45%" rows="30%"></textarea>
        </div>

        <div class="welcome_footer footer_b" style="box-shadow: 0 -30px 15px 1px rgb(255, 255, 255);">
            <div class="wfooter"></div>
        </div>
    </div>
</body>
</html>