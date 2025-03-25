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
                                <a class="nav-link" href="projects.php">Проекты</a>
                                <a class="nav-link mx-0 mx-lg-4" href="#about-us-section">О нас</a>
                                <a class="nav-link" href="contacts.php">Связаться</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>

    <section class="hero">
    <!-- Карусель для фоновых изображений -->
    <div id="heroCarousel" class="carousel slide" data-bs-pause="false" data-bs-interval="6000" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Слайды -->
            <div class="carousel-item active">
                <div class="carousel-image" style="background-image: url('../img/temp-hero.png')"></div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image" style="background-image: url('../img/temp-2.png')"></div>
            </div>
            <div class="carousel-item">
                <div class="carousel-image" style="background-image: url('../img/temp-3.png')"></div>
            </div>
        </div>
    </div>

    <!-- Контент поверх карусели -->
    <div class="container">
        <div class="hero-content col-12 col-lg-7 col-xl-5">
            <h1 class="h1">Создаем пространства будущего</h1>
            <p>Мы создаём вдохновляющие пространства, работая с жилыми, коммерческими и промышленными объектами. Наша команда воплощает ваши идеи, обеспечивая высокое качество и креативность в каждом проекте.</p>

            <div class="btns-wrap">
                <a href="#" class="hero-btn-primary">Связаться</a>
                <a href="#" class="hero-btn-secondary">Наши проекты</a>
            </div>
        </div>
    </div>
</section>

        <section class="page-block" id="about-us-section">
            <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between">
                <div class="me-0 me-lg-3">
                    <h2 class="h2">Опыт и знания в различных типах архитектурных проектов</h2>
                    <p class="p-title">Наше бюро имеет обширный опыт проектирования жилых, коммерческих и сложных промышленных объектов. Мы применяем инновационные подходы и стремимся к выдающимся результатам, учитывая уникальные запросы каждого клиента.</p>
                </div>
                <div class="img-container col-12 col-lg-8">
                    <img src="img/temp-img.png" class="page-block-img">
                </div>
            </div>
        </section>

        

        <section class="page-block">
            <div class="container">
                <div class="row mb-5 justify-content-between">
                    <h2 class="h2 col-12 col-md-5 mb-5">Преобразуем пространства для жизни и города</h2>
                    <p class="p-title col-12 col-md-6">Мы создаём современные жилые здания, общественные пространства и продуманные градостроительные решения. Наши проекты гармонично сочетают функциональность, эстетику и передовые технологии, формируя комфортную среду для жизни, работы и отдыха. Мы учитываем уникальные особенности каждого пространства и внедряем устойчивые решения для улучшения городской среды.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-md-0 mb-4 col-12">
                        <div class="project-card-preview">
                            <div class="img-container">
                                <img src="img/temp-1.png" class="img-fluid mb-4" alt="image-preview">
                            </div>
                            <h6 class="h6 mb-4">Общественные и административные здания</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-md-0 mb-4 col-12">
                        <div class="project-card-preview">
                            <div class="img-container">
                                <img src="img/temp-2.png" class="img-fluid mb-4" alt="image-preview">
                            </div>
                            <h6 class="h6 mb-4">Жилые здания</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-md-0 mb-4 col-12">
                        <div class="project-card-preview">
                            <div class="img-container">
                                <img src="img/temp-3.png" class="img-fluid mb-4" alt="image-preview">
                            </div>
                            <h6 class="h6 mb-4">Медицинские и фармацевтические объекты</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-md-0 mb-4 col-12">
                        <div class="project-card-preview">
                            <div class="img-container">
                                <img src="img/temp-4.png" class="img-fluid mb-4" alt="image-preview">
                            </div>
                            <h6 class="h6 mb-4">Промышленные объекты</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-md-0 mb-4 col-12">
                        <div class="project-card-preview">
                            <div class="img-container">
                                <img src="img/cities-building-section.png" class="img-fluid mb-4" alt="image-preview">
                            </div>
                            <h6 class="h6 mb-4">Градостроительные решения и благоустройства</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-md-0 mb-4 col-12">
                        <div class="project-card-preview">
                            <div class="img-container">
                                <img src="img/temp-4.png" class="img-fluid mb-4" alt="image-preview">
                            </div>
                            <h6 class="h6 mb-4">Спецразделы</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="page-block">
            <div class="container ">
                <div class="row align-items-center justify-content-between">
                    <div class="d-flex flex-column pe-lg-5 col-12 col-lg-6">
                        <h2 class="h2">Наши достижения говорят сами за себя</h2>
                        <p class="p-title">За более чем 15 лет работы мы успешно реализовали свыше 200 проектов различного масштаба и назначения. Наш профессионализм и стремление к качеству были отмечены многочисленными наградами и признанием в отрасли.</p>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row ms-2">
                            <div class="advantages-wrap col-12  col-md-6">
                                <p class="advantage-title">200+</p>
                                <p class="h6">Реализованных проектов</p>
                            </div>
                            <div class="advantages-wrap col-12  col-md-6">
                                <p class="advantage-title">150 км²</p>
                                <p class="h6">Созданного пространства</p>
                            </div>
                            <div class="advantages-wrap col-12  col-md-6">
                                <p class="advantage-title">15+</p>
                                <p class="h6">Лет разработки проектов</p>
                            </div>
                            <div class="advantages-wrap col-12  col-md-6">
                                <p class="advantage-title">101%</p>
                                <p class="h6">Довольных клиентов</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-block">
            <div class="container ">
                <div class="row">
                <h2 class="h2">Отзывы клиентов</h2>
                <p class="p-title mb-5">Их внимание к деталям не знает себе равных</p>
                <div class="review-container col-12 col-md-6 mb-5">
                    <div class="rating-wrap mb-4">
                        <img src="img/star.svg" alt="star">
                        <img src="img/star.svg" alt="star">
                        <img src="img/star.svg" alt="star">
                        <img src="img/star.svg" alt="star">
                        <img src="img/star.svg" alt="star">
                    </div>
                    <div class="review-text">
                        <h6 class="h6 mb-4">"Сделали все быстро и со вкусом, порадовали отличным качеством предоставленные чертежи и рендеры"</h6>
                    </div>
                    <div class="review-user d-flex align-items-center">
                        <img src="img/avatar-1.png" alt="user-avatar">
                        <div class="d-flex flex-column ms-3">
                            <span class="mb-0"><b>Пабло Эскобар</b></span>
                            <span>Заместитель конгресса Колумбии</span>
                        </div>
                    </div>
                </div>
                <div class="review-container col-12 col-md-6">
                    <div class="rating-wrap mb-4">
                        <img src="img/star.svg" alt="star">
                        <img src="img/star.svg" alt="star">
                        <img src="img/star.svg" alt="star">
                        <img src="img/star.svg" alt="star">
                        <img src="img/star.svg" alt="star">
                    </div>
                    <div class="review-text">
                        <h6 class="h6 mb-4">"Никогда не думал, что мои мечты о доме возможно воплотить в реальность!"</h6>
                    </div>
                    <div class="review-user d-flex align-items-center">
                        <img src="img/avatar-2.png" alt="user-avatar">
                        <div class="d-flex flex-column ms-3">
                            <span class="mb-0"><b>Сатоши Накамото</b></span>
                            <span>Bitcoin Developer</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>

        
    </main>

    <footer>
        <section class="page-block">
            <div class="container">
                <p class="small-title footer-wrap-container text-center mt-5">© 2025 Инспат. Все права защищены.</p>
            </div>
        </section>
    </footer>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>