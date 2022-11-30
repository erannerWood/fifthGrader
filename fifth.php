

<?php 

session_start();
$min = 1;
$max = 100;
$randomId = rand( $min, $max);

$db = '5th grader';
$mysqli = new mysqli('localhost', 'root', '', $db);

$sql = 'SELECT question, answer, `subject` FROM `fifth_grade` ORDER BY rand() limit 1;';
$result = mysqli_query($mysqli, $sql);

if(mysqli_num_rows($result)> 0){
   $row = mysqli_fetch_assoc($result);
   $_SESSION['savedAnswer'] = $row['answer'];

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5th Grade</title>
    <link rel='stylesheet' href='./trivia.css'>
 
</head>
<body>

    <div class="questionBox">
    <div class='logo'><h1>5th Grade - <?php echo $row['subject']; ?></h1></div>
    <h1 id='question'><?php echo $row['question']; ?> </h1>
    <h1 id='answer'><?php echo $row['answer'] ; ?> </h1>
    </div>
    <div id="goBack">
        <img id='refreshMe'src="./images/ruler.svg" alt="">
    </div>
    <div class="next">
<a href='./home.php'><img id='nextUp' src="./images/apple.svg" alt=""></a>
    </div>



<script> 

const refresher = document.getElementById('refreshMe')
refresher.addEventListener('click', () => {
        location.reload();})
const answer = document.getElementById('answer')
const question= document.getElementById('question')
question.addEventListener('click', () => {
    answer.style.display = 'block';

    })




</script>

</body>
</html>