<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSS Questionnaire</title>
    <link rel="stylesheet" type="text/css" href="styes/stress_calculate.css">
</head>
<body>
    <h1 class="heading">Perceived Stress Scale (PSS) Questionnaire</h1>

    <!-- Question 1 -->
    <div class="container">
        <p class="questions">Been upset because of something that happened unexpectedly?</p>
        <label class="answers"><input type="radio" name="q1" value="0"> Never</label>
        <label class="answers"><input type="radio" name="q1" value="1"> Almost Never</label>
        <label class="answers"><input type="radio" name="q1" value="2"> Sometimes</label>
        <label class="answers"><input type="radio" name="q1" value="3"> Fairly Often</label>
        <label class="answers"><input type="radio" name="q1" value="4"> Very Often</label>

        <!-- Repeat similar structure for questions 2 to 10 -->

        <!-- Question 2 -->
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

        <!-- Repeat the structure above for questions 3 to 10 -->
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
        <button onclick="calculatePssScore()">Calculate PSS Score</button> 
    </div>

    <!-- Display the result -->
    <p id="result"></p>

    <script>
        function calculatePssScore() {
            // Retrieve the selected radio button values for each question
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

            // Calculate the total PSS score
            const totalScore = scores.reduce((sum, score) => sum + score, 0);

            // Display the total PSS score
            if (totalScore < 13) {
            	document.getElementById("result").textContent = `Your total PSS score is: ${totalScore} and You have low stress right now`;
            } else if (totalScore > 14 && totalScore < 26) {
            	document.getElementById("result").textContent = `Your total PSS score is: ${totalScore} and You have moderate stress right now`;
            } else if (totalScore > 27 && totalScore <= 40) {
            	document.getElementById("result").textContent = `Your total PSS score is: ${totalScore} and You have high stress right now you need to seek help`;
            } 
        }
    </script>
</body>
</html>
