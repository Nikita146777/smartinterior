<?php
$hour = date('H');
if ($hour >= 8 && $hour < 20) {
    $theme = 'light';
    $bg = '#f0f4ff';
    $text_color = '#0a1a2e';
    $header_bg = '#ffffff';
    $card_bg = '#ffffff';
    $shadow = '0 4px 20px rgba(30, 58, 95, 0.12)';
    $border_color = '#dce4f0';
} else {
    $theme = 'dark';
    $bg = '#0d1b2a';
    $text_color = '#e8edf5';
    $header_bg = '#162040';
    $card_bg = '#1e2d4a';
    $shadow = '0 4px 20px rgba(0, 0, 0, 0.4)';
    $border_color = '#2a3d60';
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title><?php echo $page_title ?? 'SmartInterior | Умный дом'; ?></title>
    <link rel="stylesheet" href="/smartinterior/assets/css/style.css">
    
    <style>
        body { 
            background: <?php echo $bg; ?>; 
            color: <?php echo $text_color; ?>; 
            transition: 0.4s;
        }
        
        .header { 
            background: <?php echo $header_bg; ?>;
            box-shadow: <?php echo $shadow; ?>;
        }
        
        .stat-card, .service-card, .review-card, .product-card, .sale-card,
        .auth__card, .request__card, .contact__info, .contact__form {
            background: <?php echo $card_bg; ?>;
            border: 1px solid <?php echo $border_color; ?>;
            box-shadow: <?php echo $shadow; ?>;
        }
        
        .stat__number, .service__title, .product-card__title, 
        .product-card__price, .product-detail__title, .product-detail__price,
        .auth__title, .request__title, .section-title, .logo,
        .review__author, .sale-card__content h3 {
            color: <?php echo $theme == 'dark' ? '#ffffff' : '#0a1a2e'; ?>;
        }
        
        .stat__label, .service__desc, .product-card__desc,
        .review__text, .contact__info p, .sale-card__content p,
        .about__text, .mission__content p, .history__content p,
        .approach__content p, .cities__addresses p {
            color: <?php echo $theme == 'dark' ? '#b8c8e0' : '#2a4a6a'; ?>;
        }
        
        .nav__link {
            color: <?php echo $theme == 'dark' ? '#c8d8e8' : '#1a3a5a'; ?>;
            font-weight: 500;
        }
        .nav__link:hover, .nav__link.active {
            color: #e67e22;
        }
        
        .burger span {
            background: <?php echo $theme == 'dark' ? '#c8d8e8' : '#1a3a5a'; ?>;
        }
        
        .hero {
            background: <?php echo $theme == 'dark' ? 'linear-gradient(135deg, #0a1a2e 0%, #1a3a6a 50%, #2a5a8a 100%)' : 'linear-gradient(135deg, #1a3a6a 0%, #2a6a9a 50%, #3a8aba 100%)'; ?>;
        }
        
        .footer {
            background: <?php echo $theme == 'dark' ? '#060e1a' : '#0a1a2e'; ?>;
        }
        
        .form-group input, .form-group textarea, .form-group select {
            background: <?php echo $theme == 'dark' ? '#162040' : '#ffffff'; ?>;
            color: <?php echo $theme == 'dark' ? '#e8edf5' : '#0a1a2e'; ?>;
            border: 2px solid <?php echo $border_color; ?>;
        }
        .form-group input:focus, .form-group textarea:focus, .form-group select:focus {
            border-color: #e67e22;
            box-shadow: 0 0 0 3px rgba(230, 126, 34, 0.2);
        }
        
        .about__cities .city-badge {
            background: <?php echo $theme == 'dark' ? '#2a3d60' : '#dce4f0'; ?>;
            color: <?php echo $theme == 'dark' ? '#e8edf5' : '#0a1a2e'; ?>;
        }
        
        .stats { background: <?php echo $theme == 'dark' ? '#0d1b2a' : '#f5f8ff'; ?>; }
        .services { background: <?php echo $theme == 'dark' ? '#0d1b2a' : '#f0f4ff'; ?>; }
        .reviews { background: <?php echo $theme == 'dark' ? '#0d1b2a' : '#f5f8ff'; ?>; }
        .contact { background: <?php echo $theme == 'dark' ? '#0a1628' : '#ffffff'; ?>; }
        .history, .cities { background: <?php echo $theme == 'dark' ? '#0d1b2a' : '#f0f4ff'; ?>; }
        .values { background: <?php echo $theme == 'dark' ? '#0a1628' : '#ffffff'; ?>; }
        .numbers { background: <?php echo $theme == 'dark' ? '#0d1b2a' : '#f5f8ff'; ?>; }
        
        .cta__card {
            background: <?php echo $theme == 'dark' ? 'linear-gradient(135deg, #0a1a2e 0%, #1a3a6a 50%, #2a5a8a 100%)' : 'linear-gradient(135deg, #1a3a6a 0%, #2a6a9a 50%, #3a8aba 100%)'; ?>;
        }
        
        .service__icon {
            background: <?php echo $theme == 'dark' ? '#162040' : '#e8eff8'; ?>;
        }
        
        .product-card__image, .sale-card__image, .product-detail__gallery {
            background: <?php echo $theme == 'dark' ? '#162040' : '#e8eff8'; ?>;
        }
        
        .btn--secondary {
            border: 2px solid <?php echo $theme == 'dark' ? '#4a7aaa' : '#1a3a6a'; ?>;
            color: <?php echo $theme == 'dark' ? '#c8d8e8' : '#1a3a6a'; ?>;
        }
        .btn--secondary:hover {
            background: <?php echo $theme == 'dark' ? 'rgba(74, 122, 170, 0.2)' : '#e8eff8'; ?>;
        }
        
        .btn--primary {
            background: <?php echo $theme == 'dark' ? '#e67e22' : '#1a3a6a'; ?>;
            color: #ffffff;
        }
        .btn--primary:hover {
            background: <?php echo $theme == 'dark' ? '#f09030' : '#0a2a4a'; ?>;
        }
        
        <?php if ($theme == 'dark'): ?>
            a:not(.btn):not(.nav__link) { color: #6a9ad0; }
            a:not(.btn):not(.nav__link):hover { color: #8ab8f0; }
            .contact__info h3 { color: #e8edf5; }
            .auth__link a { color: #e67e22; }
            .auth__link a:hover { color: #f09030; }
            .sale-card__old-price { color: #8a9ab0; }
            .sale-card__new-price { color: #e67e22; }
            .product-detail__specs li::before { color: #e67e22; }
        <?php else: ?>
            a:not(.btn):not(.nav__link) { color: #1a5a8a; }
            a:not(.btn):not(.nav__link):hover { color: #e67e22; }
            .contact__info h3 { color: #0a1a2e; }
            .auth__link a { color: #e67e22; }
            .auth__link a:hover { color: #c06010; }
            .sale-card__old-price { color: #8a9aaa; }
            .sale-card__new-price { color: #e67e22; }
            .product-detail__specs li::before { color: #e67e22; }
        <?php endif; ?>
        .theme-indicator {
            display: inline-block;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 8px;
            background: <?php echo $theme == 'dark' ? '#e67e22' : '#1a3a6a'; ?>;
            border: 2px solid <?php echo $theme == 'dark' ? '#f09030' : '#2a6a9a'; ?>;
            vertical-align: middle;
        }
        .theme-label {
            font-size: 12px;
            opacity: 0.7;
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="container header__container">
                <a href="/smartinterior/" class="logo">Smart<span>Interior</span></a>
                <input type="checkbox" id="menu-toggle" class="menu-toggle">
                <label for="menu-toggle" class="burger">
                    <span></span><span></span><span></span>
                </label>
                <nav class="nav">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="/smartinterior/" class="nav__link <?php echo ($page == 'home') ? 'active' : ''; ?>">Главная</a></li>
                        <li class="nav__item"><a href="/smartinterior/pages/catalog.php" class="nav__link <?php echo ($page == 'catalog') ? 'active' : ''; ?>">Каталог</a></li>
                        <li class="nav__item"><a href="/smartinterior/pages/sale.php" class="nav__link <?php echo ($page == 'sale') ? 'active' : ''; ?>">Акции</a></li>
                        <li class="nav__item"><a href="/smartinterior/pages/about.php" class="nav__link <?php echo ($page == 'about') ? 'active' : ''; ?>">О нас</a></li>
                        <li class="nav__item"><a href="/smartinterior/pages/login.php" class="nav__link <?php echo ($page == 'login') ? 'active' : ''; ?>">Вход</a></li>
                        <li class="nav__item"><a href="/smartinterior/pages/registration.php" class="nav__link <?php echo ($page == 'registration') ? 'active' : ''; ?>">Регистрация</a></li>
                    </ul>
                </nav>
                <div class="header__actions">
                    <span class="theme-label">
                        <span class="theme-indicator"></span>
                        <?php echo $theme == 'dark' ? '🌙 Ночь' : '☀️ День'; ?>
                    </span>
                    <a href="/smartinterior/pages/request.php" class="btn btn--small">Создать заявку</a>
                </div>
            </div>
        </header>
        <main>