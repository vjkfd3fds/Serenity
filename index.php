<!DOCTYPE html>
<html>
<head>
<title>Serenity</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
  
}



.w3-bar .w3-button {
  padding: 16px;
}
.welcome-video-container {
    position: relative;
    width: 100%;
    height: 100vh; /* Adjust the height as needed */
    overflow: hidden;
}

.welcome-video-container video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures the video fills the container without stretching */
}

</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <!-- Replace "LOGO" text with your logo image -->
    <a href="index.php" class="w3-bar-item w3-button w3-wide"> SERENITY</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
   
      <a href="login_option.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> LOGIN</a>

    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>


<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">LOGIN</a>

 
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">SERENETY</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">SERENETY</span><br>
    <span class="w3-large">Stop wasting valuable time with projects that just isn't you.</span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
  </div> 
  <!-- Welcome Video Section -->
<div class="welcome-video-container">
  <video autoplay muted loop>
      <source src="WELCOME.mp4" type="video/mp4">
      <!-- Add additional source elements for other video formats if needed -->
      Your browser does not support the video tag.
  </video>
</div>

  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE WEBSITE</h3>
  <p class="w3-center w3-large">In our modern fast peace world stress has become an ever-present companion in our daily lives. To address this issue, the development of stress relieve game has emerged as an accessible and enjoyable means of promoting relation and mental wellbeing. This web application is minimalist stress relief game designed to provide users with a serene and calming experience. Through soothing visual, gentle and uncomplicated game play mechanics, the games aim to offer a brief respite from the pressures to everyday life. Users can engage in tranquil activities such as guided breathing exercises, nature inspired scenes, and interactive mindfulness session, all within a user-friendly interface that encourages a seamless and immensely expertise.</p>
  
</div>





<!-- Team Section -->



<!-- Contact Section -->

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>