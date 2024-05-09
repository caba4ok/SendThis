<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.php">
    <style>
        * {
            margin-top: 0 auto;
        }

        h1 {
            margin-bottom: 10px;
            color: white;
            text-align: center;
        }

        hr {
            color: grey;
            max-width: 400px;
            margin-top: 100px;
        }

        .Send {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            width: 100%;
            margin: 20px auto;
            padding: 20px;
            border-radius: 3px;
            font-family: 'Arial', sans-serif;
            background-color: grey;
        }

        .Send input {
            width: 100%;
            max-width: 278.79px;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            outline: none;
        }

        .Send button {
            transition: all 0.5s ease;
            display: block;
            width: 100%;
            max-width: 300px;
            background-color: #333;
            color: white;
            padding: 10px 15px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .Send button:hover {
            background-color: #555;
        }

        .bottom-hr {
            margin-top: 0;
        }

    </style>
    <title>SendThis</title>
</head>

<body>
    <header>
        <hr>
        <div class="Send">
            <h1>Send This</h1>
            <form action="send_order.php" method="post">
                <input type="text" name="username" placeholder="Enter your name" required>
                <input type="text" name="comment" placeholder="Order Comment" required>
                <button type="submit">Send</button>
            </form>
        </div>
        <hr class="bottom-hr">
    </header>
</body>

</html>