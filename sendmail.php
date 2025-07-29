<?php
// Упрощенный обработчик формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Защита от спам-ботов
    if (!empty($_POST['url'])) {
        header('HTTP/1.1 400 Bad Request');
        exit('Запрос заблокирован');
    }

    // Получение данных
    $name = strip_tags($_POST['username'] ?? '');
    $email = filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL);
    $question = strip_tags($_POST['question'] ?? '');

    // Базовая валидация
    $errors = [];
    if (empty($name)) $errors[] = "Укажите имя";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Некорректный email";
    if (empty($question)) $errors[] = "Напишите вопрос";

    if (!empty($errors)) {
        header('HTTP/1.1 400 Bad Request');
        exit(implode('<br>', $errors));
    }

    // Настройки письма
    $to = "info@inspat.ru";
    $subject = "Новый вопрос с сайта";
    $message = "Имя: $name\nEmail: $email\n\nВопрос:\n$question";
    $headers = "From: $email";

    // Отправка
    if (mail($to, $subject, $message, $headers)) {
        echo "Спасибо! Ваше сообщение отправлено.";
    } else {
        header('HTTP/1.1 500 Internal Server Error');
        echo "Ошибка при отправке. Попробуйте позже.";
    }
} else {
    header('HTTP/1.1 403 Forbidden');
    echo "Доступ запрещен";
}
?>