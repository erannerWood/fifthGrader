<?php 
session_start();

$page = $_SERVER['PHP_SELF'];
$sec = "5";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="<?php echo $sec ?>;URL='<?php echo $page?>'">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Answer Key</title>

    <style>
        @font-face {
            font-family: chalk;
            src: url('./fonts/Chalk Board.ttf');
        }
        body {
    background-color: rgb(50, 112, 74);
    overflow: hidden;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 10rem;
    height: 100vh;
    font-family: chalk;
    color: white;
}
    </style>
</head>
<body>
    <div class="ques">
      <?php if(!$_SESSION['savedAnswer']) {
        echo 'Waiting to start the game';
      } else echo $_SESSION['savedAnswer'];?>
    </div>
<script>
    
    // const ques = document.getElementById('ques')
    // const ans = document.getElementById('ans')



    // const button = document.getElementById('but')
    // button.addEventListener('click', async () => {
    //     const response = fetch('http://localhost/trivia/first.php', {
    //         method: 'get'
    //     }).then(function(response) {
    //         if(response.status >=200 && response.status <300) {
    //             return response.text()
    //         } throw new Error(response.statusText)
    //     }).then(function(response) {
    //         console.log(response)
    //     })
    // })

   
</script>


</body>
</html>