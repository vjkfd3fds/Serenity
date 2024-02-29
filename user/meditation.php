<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Meditation Section</title>
        <link rel="icon" type="image/x-icon" href="images/logo.png">

        <link rel="stylesheet" href="css/home.css">
        
    <link rel="stylesheet" href="timer/style.css">
    <script src="timer/script.js" defer></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body style="height: 100%">
        <?php include ('navbar.php'); ?>
    
        <!-------------------------Slide Show------------------------->
        <div class="slideshow-container" style="height: 50%;">
            <div class="mySlides fade">
                <h1>Time to Meditate</h1>
                <p style="padding-left: 6%; padding-right: 6%;"> Practice of focusing the mind & cultivating a sense of calm and inner peace.</p>
                <img src="images/meditation_1.0.png" style="width: 20%;">
                <p style="padding-left: 6%; padding-right: 6%; font-size: 20px;">Let’s enter into the quiet world that's already there - buried under the 50,000 thoughts the average person thinks every day.</p>
            </div>

        </div>
        <div>
            <table>
                <tr>
                    <th>
                        <div>
                            <div class="timer_btn" onclick="myFunction1()"><button class="ybtn">Start</button></div>
                            <div class="timer" onclick="myFunction1()" id="countdown">00:05:00</div>
                        </div>
                    </th>
                </tr>
                <tr>
                  <th>
                    <div class="msg">
                        <audio id="myAudio">
                            <source src="timer/music.mp3" type="audio/mpeg">
                        </audio>
                        <p id="msg">Times Up.. <a style="color: green;" href="meditation.php">Restart</a></p>
                    </div>
                  </th>
                </tr>
            </table>
        </div>
        <br>

        <script>
            let slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                let i;
                let slides = document.getElementsByClassName("mySlides");
                let dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}    
                if (n < 1) {slideIndex = slides.length}
                
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                }
                
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" dactive", "");
                }
                    slides[slideIndex-1].style.display = "block";  
                    dots[slideIndex-1].className += " dactive";
            }

            function myFunction() {
                var element = document.querySelector('.menu_section');
                element.classList.toggle("menu_section_d");
            }
        </script>

    </body>
</html> 
