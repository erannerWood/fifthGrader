<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Grader</title>
    <link rel='stylesheet' href='./trivia.css'>
 
</head>
<body>

    <div class="fifthGrader">
       <p> Are <span id='you'>You</span>
        <br>
        <span id='smarter'> Smarter</span>
        <br>
        Than A <span id='five'>5th Grader</span>?</p>
    </div>
    <div id="goBack">
        <img id='refreshMe'src="./images/ruler.svg" alt="">
    </div>
    <div class="next">
<a href='./first.php'><img id='nextUp' src="./images/apple.svg" alt=""></a>
    </div>

</body>

<script>
    const answerKey = document.getElementById('refreshMe')
    answerKey.addEventListener('click', () => {
        window.open('answers.php')
    })
</script>
</html>