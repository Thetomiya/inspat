<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Связаться</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.svg" type="image/x-icon">
</head>
<body>
    <div class="container">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid p-0">
                    <div class="header-width-container">
                        <a class="navbar-brand m-0" href="index.php"><img src="img/logo.svg" alt="logo.svg"></a>
                    </div>

                    <div class='d-flex buttons-wrap header-width-container order-lg-2'>
                        <div class="navbar-switches p-0 d-flex justify-content-between">
                            <div class="theme-switch-container pe-3 align-content-center">
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

                    <div class="collapse row drop-menu navbar-collapse justify-content-center order-lg-1 m-lg-0" id="navbarNavAltMarkup">
                        <div class="row flex-column flex-lg-row p-0">
                            <div class="navbar-nav  p-0 col d-flex text-center justify-content-center">
                                <a class="nav-link" href="projects.php">Проекты</a>
                                <a class="nav-link mx-0 mx-lg-4" href="index.php#about-us-section">О нас</a>
                                <a class="nav-link" href="contacts.php">Связаться</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>

    <main>
        <section class="page-block">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-8 col-12">
                        <h2 class="h2 col-12 col-lg-6 mb-5">Связаться с нами</h2>
                        <p class="p-title mb-5">Мы готовы помочь вам с вашими запросами.</p>
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-4">
                                <img src="img/mail-ico.svg" alt="mail-ico" class="me-3">
                                <span>hello@inspat.ru</span>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <img src="img/phone-ico.svg" alt="mail-ico" class="me-3">
                                <span><u>+7 (812) 989-80-13</u></span>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <img src="img/location-ico.svg" alt="mail-ico" class="me-3">
                                <span>Санкт-Петербург, ул Большой проспект Петроградской стороны, 32</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-12">
                        <form action="#" method="post">
                            <div class="d-flex flex-column">
                                <div class="mb-4">
                                    <label for="name">Имя</label>
                                    <input type="text" id="username" name="username" class="form-control contact-form-input">
                                </div>
                                <div class="mb-4">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" class="form-control contact-form-input">
                                </div>
                                <div class="mb-4">
                                    <label for="question">Вопрос</label>
                                    <textarea id="question" name="question" placeholder="Напишите свой вопрос" rows="7"class="form-control contact-form-input"></textarea>
                                </div>
                                <div>
                                    <button type="submit" class="hero-btn-primary hero-btn-primary-black">Написать</button>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <section class="page-block">
            <div class="container">
                <div class="footer-links-wrap d-flex align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="footer-logo-wrap d-flex justify-content-center justify-content-sm-start">
                        <a href="index.php">
                            <img src="img/logo.svg" alt="logo.png">
                        </a>
                    </div>
                    <div class="d-flex fw-bolder flex-column flex-sm-row my-sm-0 text-center my-5">
                        <a class="nav-link footer-nav-link" href="#">Проекты</a>
                        <a class="nav-link footer-nav-link mx-4" href="#">О нас</a>
                        <a class="nav-link footer-nav-link" href="#">Связаться</a>
                    </div>
                    <div class="d-flex">
                        <a class="nav-link">
                            <img src="img/mail-ico.svg" alt="email-ico">
                        </a>
                        <a class="nav-link mx-2" href="#">
                            <img src="img/telegram-ico.svg" alt="telegram-ico">
                        </a>
                        <a class="nav-link" href="#">
                            <img src="img/youtube-ico.svg" alt="youtube-ico">
                        </a>
                    </div>
                </div>
                <p class="small-title text-center mt-5">© 2025 Инспат. Все права защищены.</p>
            </div>
        </section>
    </footer>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>