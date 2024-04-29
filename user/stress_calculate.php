<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serenity | PSS Questionnaire</title>
    <link rel="stylesheet" type="text/css" href="css/stress.css">
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            border-radius: 5px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #5cb85c; /* Green */
            color: white;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .modal-footer {
            padding: 10px 16px;
            background-color: #f9f9f9;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        /* Red color for high stress, Yellow for moderate, and Green for low */
        .red { background-color: #f44336; }
        .yellow { background-color: #ffeb3b; }
        .green { background-color: #4caf50; }
    </style>
</head>
<body onload="alert('Calculate your stress before continuing');">    
    <h1 class="heading">Perceived Stress Scale (PSS) Questionnaire</h1>

    <!-- Questionnaire Container -->
    <div class="scrollable-container">
        <div class="container">
            <!-- Question 1 -->
            <p class="questions">Been upset because of something that happened unexpectedly?</p>
            <label class="answers"><input type="radio" name="q1" value="0"> Never</label>
            <label class="answers"><input type="radio" name="q1" value="1"> Almost Never</label>
            <label class="answers"><input type="radio" name="q1" value="2"> Sometimes</label>
            <label class="answers"><input type="radio" name="q1" value="3"> Fairly Often</label>
            <label class="answers"><input type="radio" name="q1" value="4"> Very Often</label>
            
            <p class="questions">Felt that you were unable to control important things in your life?</p>
            <label class="answers"><input type="radio" name="q2" value="0"> Never</label>
            <label class="answers"><input type="radio" name="q2" value="1"> Almost Never</label>
            <label class="answers"><input type="radio" name="q2" value="2"> Sometimes</label>
            <label class="answers"><input type="radio" name="q2" value="3"> Fairly Often</label>
            <label class="answers"><input type="radio" name="q2" value="4"> Very Often</label>

            <p class="questions">Felt nervous and 'stressed'?</p>
            <label class="answers"><input type="radio" name="q3" value="0"> Never</label>
            <label class="answers"><input type="radio" name="q3" value="1"> Almost Never</label>
            <label class="answers"><input type="radio" name="q3" value="2"> Sometimes</label>
            <label class="answers"><input type="radio" name="q3" value="3"> Fairly Often</label>
            <label class="answers"><input type="radio" name="q3" value="4"> Very Often</label>

            <p class="questions">Felt confident about your ability to handle your personal problems?</p>
            <label class="answers"><input type="radio" name="q4" value="0"> Never</label>
            <label class="answers"><input type="radio" name="q4" value="1"> Almost Never</label>
            <label class="answers"><input type="radio" name="q4" value="2"> Sometimes</label>
            <label class="answers"><input type="radio" name="q4" value="3"> Fairly Often</label>
            <label class="answers"><input type="radio" name="q4" value="4"> Very Often</label>

            <p class="questions">Felt that things were going your way?</p>
            <label class="answers"><input type="radio" name="q5" value="0"> Never</label>
            <label class="answers"><input type="radio" name="q5" value="1"> Almost Never</label>
            <label class="answers"><input type="radio" name="q5" value="2"> Sometimes</label>
            <label class="answers"><input type="radio" name="q5" value="3"> Fairly Often</label>
            <label class="answers"><input type="radio" name="q5" value="4"> Very Often</label>

            <p class="questions">Found that you could NOT cope with all the things you had to do?</p>
            <label class="answers"><input type="radio" name="q6" value="0"> Never</label>
            <label class="answers"><input type="radio" name="q6" value="1"> Almost Never</label>
            <label class="answers"><input type="radio" name="q6" value="2"> Sometimes</label>
            <label class="answers"><input type="radio" name="q6" value="3"> Fairly Often</label>
            <label class="answers"><input type="radio" name="q6" value="4"> Very Often</label>

            <p class="questions">Been able to control irritations in your life?</p>
            <label class="answers"><input type="radio" name="q7" value="0"> Never</label>
            <label class="answers"><input type="radio" name="q7" value="1"> Almost Never</label>
            <label class="answers"><input type="radio" name="q7" value="2"> Sometimes</label>
            <label class="answers"><input type="radio" name="q7" value="3"> Fairly Often</label>
            <label class="answers"><input type="radio" name="q7" value="4"> Very Often</label>

            <p class="questions">Felt that you were on top of things?</p>
            <label class="answers"><input type="radio" name="q8" value="0"> Never</label>
            <label class="answers"><input type="radio" name="q8" value="1"> Almost Never</label>
            <label class="answers"><input type="radio" name="q8" value="2"> Sometimes</label>
            <label class="answers"><input type="radio" name="q8" value="3"> Fairly Often</label>
            <label class="answers"><input type="radio" name="q8" value="4"> Very Often</label>

            <p class="questions">Been angered because of things that happened that were out of your control?</p>
            <label class="answers"><input type="radio" name="q9" value="0"> Never</label>
            <label class="answers"><input type="radio" name="q9" value="1"> Almost Never</label>
            <label class="answers"><input type="radio" name="q9" value="2"> Sometimes</label>
            <label class="answers"><input type="radio" name="q9" value="3"> Fairly Often</label>
            <label class="answers"><input type="radio" name="q9" value="4"> Very Often</label>

            <p class="questions">Felt difficulties were piling up so high that you could not overcome them?</p>
            <label class="answers"><input type="radio" name="q10" value="0"> Never</label>
            <label class="answers"><input type="radio" name="q10" value="1"> Almost Never</label>
            <label class="answers"><input type="radio" name="q10" value="2"> Sometimes</label>
            <label class="answers"><input type="radio" name="q10" value="3"> Fairly Often</label>
            <label class="answers"><input type="radio" name="q10" value="4"> Very Often</label> <br /> <br />


            <!-- Button to calculate PSS score -->
            <button onclick="calculatePssScore()">Calculate PSS Score</button> 
        </div>
    </div>

     <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content" id="modalContent">
            <div class="modal-header" id="modal-header">
                <h2>Result</h2>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- Result will be displayed here -->
            </div>
            <div class="modal-footer">
                <button onclick="GameModal()">Play a game</button>
                <button onclick="ArticleModal()">Read an article</button>
            </div>
        </div>
    </div>

    <!-- JavaScript for PSS score calculation -->
   <script>
        function calculatePssScore() {
            const scores = [
                parseInt(document.querySelector('input[name="q1"]:checked').value),
                parseInt(document.querySelector('input[name="q2"]:checked').value),
                parseInt(document.querySelector('input[name="q3"]:checked').value),
                4 - parseInt(document.querySelector('input[name="q4"]:checked').value),
                4 - parseInt(document.querySelector('input[name="q5"]:checked').value),
                parseInt(document.querySelector('input[name="q6"]:checked').value),
                4 - parseInt(document.querySelector('input[name="q7"]:checked').value),
                4 - parseInt(document.querySelector('input[name="q8"]:checked').value),
                parseInt(document.querySelector('input[name="q9"]:checked').value),
                parseInt(document.querySelector('input[name="q10"]:checked').value)
            ];

            // Calculate total score
            const totalScore = scores.reduce((sum, score) => sum + score, 0);
            let modalContent = document.getElementById('modalContent');
            let modalBody = document.getElementById('modalBody');
            let modalHeader = document.getElementById('modal-header');
            modalHeader.classList.remove('red', 'yellow', 'green');

            let modal = document.getElementById('myModal');
            modalContent.classList.remove('red', 'yellow', 'green');
            if (totalScore < 13) {
                stressLevel = 'low stress';
                alert(`Your total PSS score is: ${totalScore} and You have ${stressLevel}.`);
            } else if (totalScore >= 13 && totalScore <= 26) {
                stressLevel = 'moderate stress';
                alert(`Your total PSS score is: ${totalScore} and You have ${stressLevel}. Listening to music might reduce your stress. Click ok to go to music page.`);
            } else {
                stressLevel = 'high stress, seek help';
                alert(`Your total PSS score is: ${totalScore} and You have ${stressLevel}. This level of stress can be reduced by doing yoga. Click ok to go to yoga page.`);
            }

            openModal(totalScore);
        }

        function openModal(totalScore) {
            let modal = document.getElementById('myModal');
            modal.style.display = 'block';
            GameModal(totalScore);
        }

        function GameModal(totalScore) {
            let modal = document.getElementById('myModal');
            if (totalScore < 13) {
                modal.style.display = 'none';
                location.href = "games.php";
            } else if (totalScore >= 13 && totalScore <= 26) {
                modal.style.display = 'none';
                location.href = "music-player/index.php";
            } else {
                modal.style.display = 'none';
                location.href = "yoga/yoga_start.php";
            }
        }

        function ArticleModal() {
            let modal = document.getElementById("myModal");
            // Add your ArticleModal logic here
        }
    </script>
</body>
</html>
