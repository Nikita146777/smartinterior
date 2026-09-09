<?php
$page = 'about';
$page_title = 'О компании | SmartInterior';
include '../inc/header.php';
?>

<section class="about-hero">
    <div class="container">
        <h1>О компании</h1>
        <p class="hero-subtitle">Создаём умные пространства в Челябинске и Магнитогорске с 2008 года</p>
    </div>
</section>

<section class="mission">
    <div class="container">
        <div class="mission__wrapper">
            <div class="mission__content">
                <h2>Наша миссия</h2>
                <p>Делаем умные технологии доступными. Объединяем строительство, инженерию и IT для комфортной жизни.</p>
            </div>
        </div>
    </div>
</section>

<section class="history">
    <div class="container">
        <div class="history__wrapper">
            <div class="history__content">
                <h2>История компании</h2>
                <p>SmartInterior был основан в 2008 году как небольшая компания по автоматизации офисов. За 18 лет мы выросли в лидера рынка умных пространств в Челябинской области.</p>
                <p>Сегодня мы реализовали более 500 проектов разного масштаба — от частных квартир до стадионов. Нашими клиентами стали крупнейшие компании России: Газпром, ВКонтакте, Ростелеком, Avito.</p>
                <p>Мы гордимся тем, что делаем жизнь людей комфортнее, безопаснее и современнее с помощью технологий.</p>
            </div>
        </div>
    </div>
</section>

<section class="numbers">
    <div class="container">
        <h2 class="section-title">SmartInterior в цифрах</h2>
        <div class="stats__grid">
            <div class="stat-card">
                <div class="stat__number">12,7 млрд ₽</div>
                <div class="stat__label">бюджет проектов</div>
            </div>
            <div class="stat-card">
                <div class="stat__number">18 лет</div>
                <div class="stat__label">на рынке</div>
            </div>
            <div class="stat-card">
                <div class="stat__number">500+</div>
                <div class="stat__label">проектов</div>
            </div>
            <div class="stat-card">
                <div class="stat__number">400</div>
                <div class="stat__label">сотрудников</div>
            </div>
        </div>
    </div>
</section>

<section class="values">
    <div class="container">
        <h2 class="section-title">Наши ценности</h2>
        <div class="services__grid">
            <div class="service-card">
                <div class="service__icon">
                    <img src="/smartinterior/assets/images/качество.png" alt="Качество">
                </div>
                <h3 class="service__title">Качество</h3>
                <p class="service__desc">Проверенные технологии и материалы</p>
            </div>
            <div class="service-card">
                <div class="service__icon">
                    <img src="/smartinterior/assets/images/инновации.png" alt="Инновации">
                </div>
                <h3 class="service__title">Инновации</h3>
                <p class="service__desc">Следим за новыми технологиями</p>
            </div>
            <div class="service-card">
                <div class="service__icon">
                    <img src="/smartinterior/assets/images/надежность.png" alt="Надежность">
                </div>
                <h3 class="service__title">Надёжность</h3>
                <p class="service__desc">Гарантия на все работы</p>
            </div>
        </div>
    </div>
</section>

<section class="approach">
    <div class="container">
        <div class="approach__wrapper">
            <div class="approach__content">
                <h2>Наш подход к работе</h2>
                <p>Каждый проект для нас уникален. Мы начинаем с изучения потребностей клиента, затем разрабатываем индивидуальное решение, которое идеально вписывается в пространство и бюджет.</p>
                <p>На всех этапах — от проектирования до сдачи под ключ — мы сопровождаем клиента и гарантируем качество.</p>
                <p>Используем только сертифицированное оборудование ведущих мировых брендов. Предоставляем гарантию до 5 лет на все виды работ.</p>
            </div>
        </div>
    </div>
</section>

<section class="cities">
    <div class="container">
        <h2 class="section-title">Где мы работаем</h2>
        <div class="about__cities">
            <span class="city-badge">Челябинск</span>
            <span class="city-badge">Магнитогорск</span>
        </div>
        <div class="cities__addresses">
            <p><strong>Челябинск:</strong> ул. Кирова, 112, офис 501</p>
            <p><strong>Магнитогорск:</strong> пр. Ленина, 85, ТЦ "Арена"</p>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container">
        <div class="cta__card">
            <h2>Хотите умный дом под ключ?</h2>
            <p>Оставьте заявку — мы проконсультируем бесплатно и сделаем расчёт</p>
            <a href="/smartinterior/pages/request.php" class="btn btn--primary btn--large">Создать заявку</a>
        </div>
    </div>
</section>

<?php include '../inc/footer.php'; ?>