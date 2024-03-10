<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Options</title>
<style>
    /* Reset CSS */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-image: url(background2.jpg);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Container */
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Card */
    .card {
    width: 200px;
    height: 200px;
    background-color: rgba(161, 184, 216, 0.668); /* Adjust the opacity here */
    border-radius: 10px;
    margin: 0 20px;
    position: relative;
    transform-style: preserve-3d;
    transition: transform 0.5s;
    cursor: pointer;
}


    .card:hover {
        transform: rotateY(20deg) rotateX(10deg);
    }

    .card.flip {
        transform: rotateY(180deg) rotateX(10deg);
    }

    .card-front,
    .card-back {
        width: 100%;
        height: 100%;
        position: absolute;
        backface-visibility: hidden;
    }

    .card-front {
        background-color: #40506900;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 20px;
    }

    .card-back {
        background-color: #f9f9f9;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        transform: rotateY(180deg);
    }

    /* Link */
    .card-link {
        color: #333;
        text-decoration: none;
        font-weight: bold;
        font-size: 18px;
    }
</style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-front">
            <a href="user/login.php" class="card-link">I'm a user</a>
        </div>
        <div class="card-back">
          
        </div>
    </div>
    <div class="card">
        <div class="card-front">
            <a href="doctors/login.php" class="card-link">I'm a Doctor</a>
        </div>
        <div class="card-back">
            
        </div>
    </div>
    <div class="card">
        <div class="card-front">
            <a href="admin/login.php" class="card-link">I'm a admin</a>
        </div>
        <div class="card-back">
          
        </div>
    </div>
</div>



</body>
</html>