<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="css/chat.css">  
    <title>Лента</title>
    <script type="text/javascript">
        window.onload = function() 
        {
            document.getElementById('mega').scrollTop=document.getElementById('mega').scrollHeight;
        }
    </script>
</head>

<body>
    <?php require "db_auth.php"?>
    
    <?php
        session_start();
        $login = $_SESSION['login'];
        $pass = md5($_SESSION['pass']."DanyaBD");
 
        $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
        $row = $result->fetch_assoc();
        if(!isset($_SESSION['coockie'])){
            header ('Location: index.php');
            exit;
        }
        
    ?>


    <div class="top">
        <img src="img/Twitter-Logo.png">
        <p><?=$_COOKIE['user']?></p>

        <div class="exit">
            <button class="sumbitexit" onclick="window.location.href='messenger.php'">Выход</button>
        </div>
    </div>

    <div class="container">

        <?php

            $login = $_SESSION['login'];
            if(isset($_POST['message'])){
                $message = $_POST['message'];
                $time = time();
                $time1 = date("H:i:s",$time + 3600);

                if(strlen($message) > 0){
                    $result = $mysql->query("INSERT INTO `messages` (login, text, time) VALUES ('$login','$message','$time1')");
                    unset($_POST);
                }

            }
        ?>

        <?php
            $sql = "SELECT * FROM messages";
            $result = $mysql->query("SELECT * FROM `messages` ORDER BY `id`");
        ?>
        <div class="messages" id="mega">
            <table>
                <?php
                
                while($tablerow = $result ->fetch_row())
                {
                
                echo "<tr>
                <td class='first'>$tablerow[1] $tablerow[3]</td>
                <td class='second'>$tablerow[2]</td>
                
                </tr>";
                }
                ?>
            </table>
        </div>

        <div class="send">
            <form class="form" action="mess.php" method="post">
                <input class="news" type="text" name="message" id="" placeholder="Напишите сообщение...">
                <input class="sumbit" type="submit" value="Отправить">
            </form>
        </div>

    </div>
</body>

</html>