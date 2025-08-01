<?php
// Обработка формы на этой же странице
$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Защита от спам-ботов
    if (!empty($_POST['website'])) {
        $error = 'Ошибка отправки';
    } else {
        // Получение данных
        $name = strip_tags(trim($_POST['username'] ?? ''));
        $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
        $question = strip_tags(trim($_POST['question'] ?? ''));
        
        // Валидация
        $errors = [];
        if (empty($name)) $errors[] = "Укажите имя";
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Некорректный email";
        if (empty($question)) $errors[] = "Напишите вопрос";
        
        if (empty($errors)) {
            // Отправка письма
            $to = "inspat_site@inspat.ru";
            $subject = "Новый вопрос с сайта";
            $message = "Имя: $name\nEmail: $email\n\nВопрос:\n$question";
            $headers = "From: $email\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
            
            if (mail($to, $subject, $message, $headers)) {
                $success = true;
            } else {
                $error = "Ошибка при отправке";
            }
        } else {
            $error = implode("<br>", $errors);
        }
    }
}
?>
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
<header class="fixed-top fixed-header-wrap">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid p-0">
                <div class="header-width-container">
                    <a class="navbar-brand m-0" href="index.php"><img src="img/logo.svg" alt="logo.svg"></a>
                </div>

                <div class='d-flex buttons-wrap header-width-container order-lg-2'>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="collapse row drop-menu navbar-collapse justify-content-center m-lg-0" id="navbarNavAltMarkup">
                    <div class="row flex-column mt-3 mt-lg-0 flex-lg-row p-0">
                        <div class="navbar-nav  p-0 col d-flex text-center justify-content-center">
                            <a class="nav-link sp" href="projects.php">Проекты</a>
                            <a class="nav-link mx-0 mx-lg-4 sp" href="about-us.php">О нас</a>
                            <a class="nav-link sp" href="contacts.php">Связаться</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>

<main>
    <section class="page-block">
        <div class="container">
            <?php if ($success): ?>
                <div class="alert alert-success text-center">
                    Спасибо! Ваше сообщение отправлено.
                </div>
            <?php elseif ($error): ?>
                <div class="alert alert-danger text-center">
                    <?= $error ?>
                </div>
            <?php endif; ?>
            
            <div class="row">
                <div class="col-sm-6 col-md-8 col-12">
                    <h2 class="h2 col-12 col-lg-6 mb-5">Связаться с нами</h2>
                    <p class="p-title mb-5">Мы готовы помочь Вам с вашими запросами.</p>
                    <div class="d-flex flex-column">
                        <div class="d-flex align-items-center mb-4 email-container" onclick="copyEmail()">
                            <img src="img/mail-ico.svg" alt="mail-ico" class="me-3">
                            <span>info@inspat.ru</span>
                            <div class="tooltip-custom">копировать адрес</div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <img src="img/phone-ico.svg" alt="mail-ico" class="me-3">
                            <span><u>+7 812 989-80-13</u></span>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <img src="img/location-ico.svg" alt="mail-ico" class="me-3">
                            <span>197046, Россия, г. Санкт-Петербург, ул. Чапаева, д. 9, лит. А</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-12">
                    <form method="post">
                        <!-- Скрытое поле для защиты от спама -->
                        <div style="position: absolute; left: -9999px;">
                            <label for="website">Не заполняйте это поле</label>
                            <input type="text" name="website" id="website">
                        </div>
                        
                        <div class="d-flex flex-column">
                            <div class="mb-4">
                                <label for="name">Имя</label>
                                <input type="text" id="username" name="username" class="form-control contact-form-input" 
                                       value="<?= isset($_POST['username']) ? htmlspecialchars($_POST['username']) : '' ?>" required>
                            </div>
                            <div class="mb-4">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control contact-form-input"
                                       value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>" required>
                            </div>
                            <div class="mb-4">
                                <label for="question">Вопрос</label>
                                <textarea id="question" name="question" placeholder="Напишите свой вопрос" rows="7" 
                                          class="form-control contact-form-input" required><?= isset($_POST['question']) ? htmlspecialchars($_POST['question']) : '' ?></textarea>
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
        <section class="footer-block">
            <div class="container">

                
                <div class="d-flex flex-column text-center flex-md-row justify-content-between small-title footer-wrap-container">
                    <a class="sp" href="private-policy.php">Политика конфиденциальности</a>
                    <a class="p-3 p-md-0">© 2025 ИНСПАТ. Все права защищены.</a>
                    <a class="sp" href="legal-information.php">Правовая информация</a>
                </div>
                
            </div>
        </section>
    </footer>

<script src="js/bootstrap.min.js"></script>
<script>
// Блокировка кнопки при отправке
document.querySelector('form').addEventListener('submit', function() {
    const btn = this.querySelector('button[type="submit"]');
    btn.disabled = true;
    btn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Отправка...';
});
</script>
<script>
        function copyEmail() {
            const tooltip = document.querySelector('.tooltip-custom');
            navigator.clipboard.writeText('info@inspat.ru');
            tooltip.textContent = 'скопировано';
            
            setTimeout(() => {
                tooltip.textContent = 'копировать адрес';
            }, 2000);
        }
</script>
</body>
</html>