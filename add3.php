<?php
$server = 'localhost';
$username ='root';
$password = '';
$db = '5th grader';

$conn = mysqli_connect($server, $username, $password, $db);

if (isset($_POST['submit'])){
    if(!empty($_POST['question']) && (!empty($_POST['answer'])))

    $question = $_POST['question'];
    $answer = $_POST['answer'];
    $subject = $_POST['subject'];




    $query = "INSERT INTO `third_grade` (`question`, `answer`, `subject`) VALUES ('$question', '$answer', '$subject')";

    $run = mysqli_query($conn, $query) or die(mysqli_error());

    if($run){
        echo 'question added';
    } else {
        echo 'form not submitted';
    }

} else {
    echo 'all fields are required';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submitted!</title>
    <link rel='stylesheet' href='./addQs.css'>
</head>
<body>
    <a href="./addThirdQ.php">Add another question to 3rd grade!</a>
    <a href="./dashboard.php">Home</a>
</body>
</html>