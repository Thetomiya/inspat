<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Инспат</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
<body>
    <div class="container">
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid  p-0">
            <a class="navbar-brand" href="index.php"><img src="img/logo.svg" alt="logo.svg"></a>

            <!-- Контейнер buttons-wrap с изменяемым порядком -->
            <div class='d-flex buttons-wrap order-lg-2'>
                <div class="navbar-switches p-0 d-flex justify-content-between">
                    <div class="theme-switch-container ps-3 pe-3 align-content-center">
                        <img src="img/theme-switch.svg" alt="theme-switch.svg">
                    </div>
                    <div class="email-btn-container align-content-center">
                        <img src="img/mail-ico.svg" alt="mail-ico.svg">
                    </div>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <!-- Блок collapse с изменяемым порядком -->
            <div class="collapse row drop-menu navbar-collapse justify-content-center justify-content-lg-between order-lg-1" id="navbarNavAltMarkup">
                <div class="row flex-column  flex-lg-row p-0">
                    <div class="navbar-nav  p-0 col d-flex text-center justify-content-center">
                        <a class="nav-link " href="#">Проекты</a>
                        <a class="nav-link " href="#">О нас</a>
                        <a class="nav-link" href="#">Связаться</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    </header>
    </div>

    <main>
    <section class="hero">
        <!-- Герой-секция с картинкой -->
        <div class="hero-content">
            <h1>Добро пожаловать!</h1>
            <p>Это пример герой-секции</p>
        </div>
    </section>

    <section class="content">
        <!-- Остальной контент -->
        <h2>Дополнительный контент</h2>
        <p>Этот контент появится после прокрутки.</p>
    </section>
    </main>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>