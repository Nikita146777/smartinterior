<?php
$page = 'sale';
$page_title = 'Акции | SmartInterior';
include '../inc/header.php';
?>

<section style="padding: 60px 0;">
    <div class="container">
        <h1 class="section-title">Акции и предложения</h1>
        <div class="sales__grid">
            <div class="sale-card">
                <div class="sale-card__badge">-15%</div>
                <div class="sale-card__image">
                    <img src="/smartinterior/assets/images/термостат про.png" alt="Умный термостат PRO">
                </div>
                <div class="sale-card__content">
                    <h3>Умный термостат PRO</h3>
                    <p>Экономия до 30% на отоплении. Управление со смартфона.</p>
                    <div class="sale-card__old-price">14 990 ₽</div>
                    <div class="sale-card__new-price">12 741 ₽</div>
                    <a href="/smartinterior/pages/request.php" class="btn btn--primary">Заказать</a>
                </div>
            </div>
            <div class="sale-card">
                <div class="sale-card__badge">Подарок</div>
                <div class="sale-card__image">
                    <img src="/smartinterior/assets/images/умная колонка.jpg" alt="Умная колонка">
                </div>
                <div class="sale-card__content">
                    <h3>Умная колонка в подарок</h3>
                    <p>При заказе любого комплекта от 30 000 ₽.</p>
                    <div class="sale-card__promo-text">Только до конца месяца</div>
                    <a href="/smartinterior/pages/request.php" class="btn btn--primary">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../inc/footer.php'; ?>