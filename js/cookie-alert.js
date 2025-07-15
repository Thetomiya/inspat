document.addEventListener('DOMContentLoaded', function() {
    // Проверяем, было ли уже принято решение о cookies
    if (!localStorage.getItem('cookiesAccepted')) {
        // Показываем модальное окно
        var cookieModal = new bootstrap.Modal(document.getElementById('cookieModal'));
        cookieModal.show();
        
        // Обработчики кнопок
        document.getElementById('acceptCookies').addEventListener('click', function() {
            localStorage.setItem('cookiesAccepted', 'true');
            cookieModal.hide();
        });
        
    }
});