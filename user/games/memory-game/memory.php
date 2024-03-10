<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Memory Game</title>
    <style>
        *
        {
            margin: 10;
            padding: 10;
            box-sizing: border-box;
            font-family: monospace;
        }
        .container{
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 30px;
            background: #0d614b;
            padding: 40px 60px;
        }
        .h2{
            font-size: 3em;
            color: #fff;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }
        .reset{
            padding: 15px 20px;
            color: #267c65;
            background: #fff;
            border:none;
            font-size: 1.5em;
            letter-spacing: 0.1;
            text-transform: uppercase;
            cursor: pointer;
            font-weight: 600;
        }
        .reset:focus{
            color: #fff;
            background: #267c65;
        }
        .game{
            width: 430px;
            height: 430px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            transform-style: preserve-3d;
            perspective: 500px;
        }
        .item{
            position: relative;
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3em;
            background: #fff;
            transition: transform 0.5s;
            transform-style: preserve-3d;
            transform-origin: center center;
            cursor: pointer;
        }
        .flipped {
            transform: rotateY(180deg);
        }
        .item::after{
            content: '';
            position: absolute;
            inset: 0;
            background: #209d7b;
            transition: 0.25s;
            backface-visibility: hidden;
        }
        .score {
            font-size: 1.5em;
            color: #fff;
            margin-top: 20px;
        }
        .fireworks {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: 999;
            pointer-events: none;
        }
        .firework {
            position: absolute;
            width: 10px;
            height: 10px;
            background: #f00;
            border-radius: 50%;
            opacity: 0.5;
            animation: explode 1s ease-out infinite;
        }

        @keyframes explode {
            0% {
                transform: scale(1);
                opacity: 0.5;
            }
            50% {
                transform: scale(5);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 0.5;
            }
        }
    </style>
   
</head>
<body>
    
    <div class="container">
       <h2>Memory game </h2>
       <div class="game"></div>
       <button class="reset">Reset game</button>
       <div class="score">Moves: <span id="moves">0</span></div>
       <div class="fireworks"></div>
    </div>
 
    <script>
        const emojis = ['😀', '😎', '🥳', '🚀', '🎉', '🌟', '🍕', '🍦'];
        const gameContainer = document.querySelector('.game');
        const movesCounter = document.getElementById('moves');
        const fireworksContainer = document.querySelector('.fireworks');
        let flippedCards = [];
        let moves = 0;

        function shuffle(array) {
            for (let i = array.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
            return array;
        }

        function createCard(emoji) {
            const card = document.createElement('div');
            card.classList.add('item');
            card.innerHTML = `<span class="emoji">${emoji}</span>`;
            card.addEventListener('click', () => {
                card.classList.toggle('flipped');
                flippedCards.push(card);
                if (flippedCards.length === 2) {
                    moves++;
                    movesCounter.innerText = moves;
                    checkMatch();
                }
            });
            return card;
        }

        function initGame() {
            moves = 0;
            movesCounter.innerText = moves;
            const shuffledEmojis = shuffle([...emojis, ...emojis]);
            shuffledEmojis.forEach(emoji => {
                const card = createCard(emoji);
                gameContainer.appendChild(card);
            });
        }

        function resetGame() {
            gameContainer.innerHTML = '';
            flippedCards = [];
            fireworksContainer.innerHTML = '';
            initGame();
        }

        function checkMatch() {
            if (flippedCards[0].querySelector('.emoji').innerText !== flippedCards[1].querySelector('.emoji').innerText) {
                // Delay before flipping back incorrect matches
                setTimeout(() => {
                    flippedCards.forEach(card => card.classList.remove('flipped'));
                    flippedCards = [];
                }, 1000); // Adjust the delay time as needed
            } else {
                flippedCards = [];
                if (document.querySelectorAll('.flipped').length === emojis.length * 2) {
                    showWinPopup();
                }
            }
        }

        function showWinPopup() {
            alert('Congratulations! You win!');
            showFireworks();
        }

        function showFireworks() {
            for (let i = 0; i < 50; i++) {
                createFirework();
            }
        }

        function createFirework() {
            const firework = document.createElement('div');
            firework.classList.add('firework');
            firework.style.left = Math.random() * 100 + '%';
            firework.style.top = Math.random() * 100 + '%';
            fireworksContainer.appendChild(firework);
        }

        document.querySelector('.reset').addEventListener('click', resetGame);

        window.addEventListener('DOMContentLoaded', initGame);
    </script>
</body>
</html>