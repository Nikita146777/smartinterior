<?php
$page = 'login';
$page_title = 'Вход | SmartInterior';
include '../inc/header.php';
?>

<section class="auth">
    <div class="container">
        <div class="auth__card">
            <h1 class="auth__title">Вход в аккаунт</h1>
            <form>
                <div class="form-group"><input type="email" placeholder="Электронная почта" required></div>
                <div class="form-group"><input type="password" placeholder="Пароль" required></div>
                <button type="submit" class="btn btn--primary btn--full">Войти</button>
            </form>
            <p class="auth__link">Нет аккаунта? <a href="/smartinterior/pages/registration.php">Зарегистрироваться</a></p>
        </div>
    </div>
</section>

<?php include '../inc/footer.php'; ?>