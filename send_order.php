<?php
if ($_POST) {
    try {
        $userName = $_POST["username"];
        $comment = $_POST["comment"];
    } catch (\ThrowAble $th ) {
        $userName = "error";
        $comment = "error";
    }
    $token = "6880238605:AAG3_grcG91SDJ5fMQiUfdegmV37M-a-550";
    $chat_id = 5670341815;
    $userName = urlencode("$userName");
    $comment = urlencode("$comment");
    $urlQuery = "https://api.telegram.org/bot". $token. "/sendMessage?chat_id=". $chat_id. "&text=". 
    "Ім'я Користувача:%0A$userName%0A". 
    "Коментарій що до замовлення:%0A$comment";
    $result = file_get_contents($urlQuery);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="index.php">Send one more message</a>
</body>
</html>