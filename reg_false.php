<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">  
    <title>Document</title>
   
</head>
<body>
    
    <?php
        session_start();
        if(isset($_SESSION['coockie'])):
            header ('Location: mess.php');
    ?>
    
    <?php else: ?>

    <div id="zatemnenie">
        <form id="okno" action="check.php" method="post">
            <div class="topreg">
                <a href="index.php" class="close">Закрыть</a>
                <img class="imgclass3" src="img/Twitter-Logo.png">
                <button class="send" type="submit">Далее</button>
                
            </div>

            <div class="centerreg">
                <p class="content-text4">Создайте учетную запись</p>
                
				<input type="text" id="name" name="name" placeholder="Имя">
				<input type="text" id="login" name="login" placeholder="Логин">
                <p class="false">Пользователь с таким логином уже существует, попробуйте ещё раз</p>
                <input type="pass" id="pass" name="pass" placeholder="Пароль">

            </div>

            <div class="bottom">
                <h class="content-text5">Учетные данные</h>
                <p class="content-text6">Эта информация не будет общедоступной. Ваши данные не будут распространены, даже если эта учетная запись предназначена для компании, домашнего животного и т. д.</p>
            </div>


        </form>
    </div>

    <div id="zatemnenie2">
        <form id="okno2" action="auth.php" method="post">  
            <div class="topreg">
                <a href="index.php" class="close">Закрыть</a>
                <img class="imgclass3" src="img/Twitter-Logo.png">
                <button class="send" type="submit">Далее</button>
                
            </div>

            <div class="centerreg">
                <p class="logtext">Войти в Twitter</p>
                
				<input type="text" id="login" name="login" placeholder="Введите логин">
                <input type="pass" id="pass" name="pass" placeholder="Введите пароль">

            </div>


        </form>
    </div>



        

    <div class="container-left">
        <div class="content-center">
            <div class="content">
                <div class="center-img">
                    <img class="imgclass" src="img/lupa.png">
                    <p class="content-text">Читайте о том, что вам интересно.</p>
                </div>

                <div class="center-img">
                    <img class="imgclass" src="img/friends.png">
                    <p class="content-text">Узнайте, о чем говорят в мире.</p>
                </div>

                <div class="center-img">
                    <img class="imgclass" src="img/message.png">
                    <p class="content-text">Присоединяйтесь к общению.</p>
                </div>
            </div>
        </div>
        
    </div>


    <div class="container-right">
        <div class="content-center2">
            <div class="content">
                <div class="center-img2">
                    <img class="imgclass2" src="img/Twitter-Logo.png">
                    <p class="content-text2">Узнайте, что происходит в мире прямо сейчас</p>
                </div>
            </div>

            <div class="content2">
                <div class="center-img2">
                    <p class="content-text3">Присоединяйтесь к Твиттеру прямо сейчас!</p>
                    <input name="regist" type="button" value="Зарегистрироваться" onClick="window.location='#zatemnenie'">
                    <input name="sign" type="button" value="Войти" onClick="window.location='#zatemnenie2'">
                </div>
            </div>
        </div>
        
    </div>

    <nav>
        <ul>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="#">О нас</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="galary.html">Справочный центр</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="facts.html">Условия предоставления услуг</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="links.html">Политика конфиденциальности</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="links.html">Политика в отношении файлов cookie</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="links.html">Информация о рекламе</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="links.html">Блог</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="links.html">Работа</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="links.html">Ресурсы бренда</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="links.html">Реклама</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="links.html">Маркетинг</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="links.html">Твиттер для бизнеса</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="links.html">Разработчикам</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="links.html">Каталог</a></li>
            <li class="nav-item"><a class="nav-link" onmouseover="this.className='nav-active'" onmouseout="this.className='nav-link'" href="links.html">Настройки</a></li>

            <li class="nav-item2"><a class="nav-link2">© Twitter, Danya, 2021</a></li>
        </ul>
    </nav>

    <?php endif;?>

</body>
</html>
