<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Fifth Grade Questions</title>
    <link rel='stylesheet' href='./addQs.css'>
</head>
<body>
    <h1>Add Fifth Grade Questions</h1>
    <div class="questBox">
    <form action="add5.php" method='POST'>
        <label for="question">Question</label>
        <input type="text" name='question'><br>
        <label for="answer">Answer</label>
        <input type="text" name='answer'><br>
        <label for="subject">Subject</label>
        <input type="text" name='subject'><br>
        <button type='submit' name='submit'>Submit</button><br>
        <a href="./dashboard.php">Home</a>
    </form>
    </div>
</body>
</html>