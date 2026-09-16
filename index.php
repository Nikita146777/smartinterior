<?php
$page = 'home';
$page_title = 'SmartInterior | Умный дом в Челябинске';
include 'inc/header.php';
?>

<section class="hero">
    <div class="container hero__container">
        <div class="hero__content">
            <h1 class="hero__title">Строим. <br>Автоматизируем. <br>Управляем.</h1>
            <p class="hero__desc">Мы — эксперты в создании умных пространств для жизни и бизнеса</p>
            <div class="hero__btns">
                <a href="/smartinterior/pages/catalog.php" class="btn btn--primary">Перейти в каталог</a>
                <a href="/smartinterior/pages/request.php" class="btn btn--secondary">Создать заявку</a>
            </div>
        </div>
        <div class="hero__image">
            <img src="/smartinterior/assets/images/1777897335.png" alt="Умный дом">
        </div>
    </div>
</section>

<section class="stats">
    <div class="container stats__grid">
        <div class="stat-card"><div class="stat__number">12,7 млрд</div><div class="stat__label">бюджет проектов</div></div>
        <div class="stat-card"><div class="stat__number">18 лет</div><div class="stat__label">на рынке</div></div>
        <div class="stat-card"><div class="stat__number">500+</div><div class="stat__label">проектов</div></div>
        <div class="stat-card"><div class="stat__number">400</div><div class="stat__label">сотрудников</div></div>
    </div>
</section>

<section class="services">
    <div class="container">
        <h2 class="section-title">Услуги</h2>
        <div class="services__grid">
            <div class="service-card">
                <div class="service__icon"><img src="/smartinterior/assets/images/проектирование.png" alt="Проектирование"></div>
                <h3 class="service__title">Проектирование</h3>
                <p class="service__desc">Инженерные решения и архитектура</p>
            </div>
            <div class="service-card">
                <div class="service__icon"><img src="/smartinterior/assets/images/отделка под ключ.png" alt="Fit-out"></div>
                <h3 class="service__title">Fit-out</h3>
                <p class="service__desc">Отделка и оснащение под ключ</p>
            </div>
            <div class="service-card">
                <div class="service__icon"><img src="/smartinterior/assets/images/мультимедиа.png" alt="Мультимедиа"></div>
                <h3 class="service__title">Инженерия и мультимедиа</h3>
                <p class="service__desc">Умные системы, AI-интеграция</p>
            </div>
            <div class="service-card">
                <div class="service__icon"><img src="/smartinterior/assets/images/разработка ПО.png" alt="Разработка ПО"></div>
                <h3 class="service__title">Разработка ПО</h3>
                <p class="service__desc">Приложения для удобства дома</p>
            </div>
        </div>
    </div>
</section>

<section class="about">
    <div class="container">
        <h2 class="section-title">О компании</h2>
        <div class="about__content">
            <p class="about__text">SmartInterior — лидер в области создания умных пространств в Челябинске и Магнитогорске. Мы объединяем компетенции в строительстве, инженерии и IT, чтобы создавать идеальные условия для жизни и работы.</p>
            <p class="about__text">За 18 лет работы мы реализовали более 500 проектов: от квартир и загородных домов до бизнес-центров и стадионов.</p>
            <div class="about__cities">
                <span class="city-badge">Челябинск</span>
                <span class="city-badge">Магнитогорск</span>
            </div>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="container">
        <h2 class="section-title">Отзывы наших клиентов</h2>
        <div class="reviews__grid">
            <div class="review-card">
                <div class="review__image"><img src="/smartinterior/assets/images/отзыв1.png" alt="Алексей"></div>
                <div class="review__content">
                    <p class="review__text">"Удивительно качественные решения. Всё работает как часы уже второй год!"</p>
                    <div class="review__author">Алексей, Челябинск</div>
                    <div class="review__rating">★★★★★</div>
                </div>
            </div>
            <div class="review-card">
                <div class="review__image"><img src="/smartinterior/assets/images/отзыв2.png" alt="Екатерина"></div>
                <div class="review__content">
                    <p class="review__text">"Проект выполнен быстро и качественно. Специалисты очень вежливые."</p>
                    <div class="review__author">Екатерина, Магнитогорск</div>
                    <div class="review__rating">★★★★★</div>
                </div>
            </div>
            <div class="review-card">
                <div class="review__image"><img src="/smartinterior/assets/images/отзыв3.png" alt="Дмитрий"></div>
                <div class="review__content">
                    <p class="review__text">"Отличные результаты! Инновационные решения, которые упрощают жизнь."</p>
                    <div class="review__author">Дмитрий, Челябинск</div>
                    <div class="review__rating">★★★★★</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact">
    <div class="container">
        <h2 class="section-title">Как с нами связаться</h2>
        <div class="contact__grid">
            <div class="contact__info">
                <h3>Наши офисы</h3>
                <p>Челябинск, ул. Карла Маркса, 36, офис 501</p>
                <p>Магнитогорск, пр. Ленина, 85, ТЦ "Арена"</p>
                <h3>Телефоны</h3>
                <p>+7 (351) 123-45-67</p>
                <p>+7 (3519) 67-89-01</p>
                <h3>Email</h3>
                <p>info@smartinterior.ru</p>
            </div>
            <div class="contact__form">
                <form class="feedback-form">
                    <div class="form-group"><input type="text" placeholder="Ваше имя"></div>
                    <div class="form-group"><input type="tel" placeholder="Телефон"></div>
                    <div class="form-group"><textarea rows="3" placeholder="Ваш вопрос"></textarea></div>
                    <button type="submit" class="btn btn--primary btn--full">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'inc/footer.php'; ?>