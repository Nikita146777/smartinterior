<?php
$page = 'registration';
$page_title = 'Регистрация | SmartInterior';
include '../inc/header.php';
?>

<section class="auth">
    <div class="container">
        <div class="auth__card">
            <h1 class="auth__title">Регистрация</h1>
            <form>
                <div class="form-group"><input type="text" placeholder="Имя и фамилия" required></div>
                <div class="form-group"><input type="tel" placeholder="Телефон"></div>
                <div class="form-group"><input type="email" placeholder="Электронная почта" required></div>
                <div class="form-group"><input type="password" placeholder="Пароль" required></div>
                <div class="form-group"><input type="password" placeholder="Подтвердите пароль" required></div>
                <button type="submit" class="btn btn--primary btn--full">Зарегистрироваться</button>
            </form>
            <p class="auth__link">Уже есть аккаунт? <a href="/smartinterior/pages/login.php">Войти</a></p>
        </div>
    </div>
</section>

<?php include '../inc/footer.php'; ?>