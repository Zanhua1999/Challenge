<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div>
        <?php

$mysqli = new mysqli('localhost', 'root', 'root', 'bit_comments') or die ('Error connecting');
$query = "SELECT content, tijd FROM comment";
$stmt = $mysqli->prepare($query) or die ('  ');
$stmt->bind_result($content, $tijd) or die ('binding result');
$stmt->execute() or die ('Error excecuting');

        while ($succes = $stmt->fetch()) {
            echo '<div id="text">' . 'Comment : ' . '' . $content .' '. $tijd . '</div>' . '<br>';
        
        }
        ?>
        </div>

<div id="con">
<form method="post" action="comment.php" enctype="multipart/form-data">
<label><br><textarea name="content" rows="8" cols="80" maxlength="200"></textarea></label><br><br>
<input type="submit" name="submit_comment" value="Send"/>
</form>
</div>
</body>
</html>