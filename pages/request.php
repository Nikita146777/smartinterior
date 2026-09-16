<?php
$page = 'request';
$page_title = 'Создать заявку | SmartInterior';
include '../inc/header.php';
?>

<section class="auth">
    <div class="container">
        <div class="request__card">
            <h1 class="request__title">Оставить заявку</h1>
            <p style="text-align: center; margin-bottom: 24px;">Заполните форму, и наш специалист свяжется с вами</p>
            <form>
                <div class="form-group"><input type="text" placeholder="Ваше имя" required></div>
                <div class="form-group"><input type="tel" placeholder="Телефон" required></div>
                <div class="form-group"><input type="email" placeholder="Email"></div>
                <div class="form-group">
                    <select>
                        <option>Выберите услугу</option>
                        <option>Проектирование умного дома</option>
                        <option>Fit-out / отделка</option>
                        <option>Инженерия и мультимедиа</option>
                        <option>Разработка ПО</option>
                        <option>Умная лампа Glow Pro</option>
                        <option>Термостат PRO</option>
                        <option>Wi-Fi розетка</option>
                        <option>Датчик движения</option>
                        <option>Умная камера</option>
                        <option>Хаб управления</option>
                    </select>
                </div>
                <div class="form-group"><textarea rows="4" placeholder="Комментарий"></textarea></div>
                <div class="checkbox-group">
                    <input type="checkbox" id="consent">
                    <label for="consent">Я согласен на обработку персональных данных</label>
                </div>
                <button type="submit" class="btn btn--primary btn--full">Отправить заявку</button>
            </form>
        </div>
    </div>
</section>

<?php include '../inc/footer.php'; ?>