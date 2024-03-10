<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card-container {
            display: flex;
            justify-content: center; /* Align container horizontally in center */
            align-items: center; /* Align container vertically in center */
            flex-wrap: wrap; /* Allow cards to wrap */
            gap: 50px; /* Optional: Add gap between cards */
            padding: 20px; /* Optional: Add padding around cards */
        }

        .card {
            width: 300px;
            border-radius: 50px; /* Adjust border-radius to your preference */
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-image {
            width: 100%;
            height: auto;
        }

        .card-content {
            padding: 20px;
            position: relative;
            background-color: rgba(99, 130, 191, 0.844);
        }

        .card-title {
            margin: 10;
            font-size: 20px;
        }

        .card-text {
            margin-top: 10px;
            font-size: 16px;
            transition: transform 0.3s ease; /* Add transition for sliding effect */
            transform: translateY(100%);
            position: absolute;
            bottom: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            color: white;
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .card:hover .card-text {
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <div class="card-container">
        <div class="card">
            <img src="game1.jpg" alt="Image" class="card-image">
            <div class="card-content">
                <h2 class="card-title">VALORANT</h2>
                <p class="card-text">Valorant is a free-to-play first-person tactical hero shooter developed and published by Riot Games, for Windows.[3] Teased under the codename Project A in October 2019, the game began a closed beta period with limited access on April 7, 2020, followed by a release on June 2, 2020. The development of the game started in 2014.</p>
                
            </div>
        </div>
        <div>
            <a href="cardgame.html" class="btn">Redirect</a>
        </div>
        

        <div class="card">
            <img src="game2.jpg" alt="Image" class="card-image">
            <div class="card-content">
                <h2 class="card-title">GTA V</h2>
                <p class="card-text">Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North and published by Rockstar Games. It is the seventh main entry in the Grand Theft Auto series, following 2008's Grand Theft Auto IV, and the fifteenth instalment overall.</p>
            </div>
        </div>

        <div class="card">
            <img src="game3.jpg" alt="Image" class="card-image">
            <div class="card-content">
                <h2 class="card-title">PUBG PC</h2>
                <p class="card-text">PUBG: Battlegrounds is a battle royale game developed by PUBG Studios and published by Krafton. The game, which was inspired by the Japanese film Battle Royale, is based on previous mods created by Brendan "PlayerUnknown" Greene for other games, and expanded into a standalone game under Greene's creative direction</p>
            </div>
        </div>

        <div class="card">
            <img src="game4.jpg
            " alt="Image" class="card-image">
            <div class="card-content">
                <h2 class="card-title">FORZA Horizon</h2>
                <p class="card-text">Taking place during the fictitious Horizon Festival, a street racing event, the player's aim is to progress via winning races, while also increasing their popularity level by performing stunts and activities. Unlike previous games in the Forza series, Forza Horizon takes place in an open world that players can explore.</p>
            </div>
        </div>
    </div>
</body>
</html>