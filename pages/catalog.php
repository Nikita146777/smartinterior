<?php
$page = 'catalog';
$page_title = 'Каталог | SmartInterior';
include '../inc/header.php';
?>

<section style="padding: 60px 0;">
    <div class="container">
        <h1 class="section-title">Каталог умных устройств</h1>
        <div class="catalog__grid">
            <div class="product-card">
                <div class="product-card__image"><img src="/smartinterior/assets/images/умная лампа.png" alt="Лампа"></div>
                <div class="product-card__content">
                    <h3 class="product-card__title">Умная лампа Glow Pro</h3>
                    <p class="product-card__desc">16 млн цветов, управление с телефона</p>
                    <div class="product-card__price">5 990 ₽</div>
                    <div class="product-buttons">
                        <a href="/smartinterior/pages/product-detail.php" class="btn btn--small btn--primary">Подробнее</a>
                        <a href="/smartinterior/pages/request.php" class="btn btn--small btn--secondary">Заявка</a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-card__image"><img src="/smartinterior/assets/images/термостат про.png" alt="Термостат"></div>
                <div class="product-card__content">
                    <h3 class="product-card__title">Термостат PRO</h3>
                    <p class="product-card__desc">Экономия до 30% на отоплении</p>
                    <div class="product-card__price">12 490 ₽</div>
                    <div class="product-buttons">
                        <a href="/smartinterior/pages/product-detail.php" class="btn btn--small btn--primary">Подробнее</a>
                        <a href="/smartinterior/pages/request.php" class="btn btn--small btn--secondary">Заявка</a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-card__image"><img src="/smartinterior/assets/images/wi-fi розетка.png" alt="Розетка"></div>
                <div class="product-card__content">
                    <h3 class="product-card__title">Wi-Fi розетка</h3>
                    <p class="product-card__desc">Управление приборами удалённо</p>
                    <div class="product-card__price">1 990 ₽</div>
                    <div class="product-buttons">
                        <a href="/smartinterior/pages/product-detail.php" class="btn btn--small btn--primary">Подробнее</a>
                        <a href="/smartinterior/pages/request.php" class="btn btn--small btn--secondary">Заявка</a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-card__image"><img src="/smartinterior/assets/images/датчик.png" alt="Датчик"></div>
                <div class="product-card__content">
                    <h3 class="product-card__title">Датчик движения</h3>
                    <p class="product-card__desc">Автоматическое включение света</p>
                    <div class="product-card__price">2 490 ₽</div>
                    <div class="product-buttons">
                        <a href="/smartinterior/pages/product-detail.php" class="btn btn--small btn--primary">Подробнее</a>
                        <a href="/smartinterior/pages/request.php" class="btn btn--small btn--secondary">Заявка</a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-card__image"><img src="/smartinterior/assets/images/умная камера.png" alt="Камера"></div>
                <div class="product-card__content">
                    <h3 class="product-card__title">Умная камера</h3>
                    <p class="product-card__desc">Full HD, ночное видение</p>
                    <div class="product-card__price">4 990 ₽</div>
                    <div class="product-buttons">
                        <a href="/smartinterior/pages/product-detail.php" class="btn btn--small btn--primary">Подробнее</a>
                        <a href="/smartinterior/pages/request.php" class="btn btn--small btn--secondary">Заявка</a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-card__image"><img src="/smartinterior/assets/images/хаб.png" alt="Хаб"></div>
                <div class="product-card__content">
                    <h3 class="product-card__title">Хаб управления</h3>
                    <p class="product-card__desc">До 50 устройств, Zigbee 3.0</p>
                    <div class="product-card__price">8 990 ₽</div>
                    <div class="product-buttons">
                        <a href="/smartinterior/pages/product-detail.php" class="btn btn--small btn--primary">Подробнее</a>
                        <a href="/smartinterior/pages/request.php" class="btn btn--small btn--secondary">Заявка</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../inc/footer.php'; ?>