<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    
    <h1>Отправка данных на сервер</h1>
    <h2>Еще о формах</h2>
    <hr>
    <h2>Регистрация. Страница 3</h2>

    <?php
        if (!isset($_POST['surname']) || !isset($_POST['name']) || !isset($_POST['patronymic']) ||
            !isset($_POST['post']) || !isset($_POST['category']) || !isset($_POST['experience'])) {
            echo "<p style='color: red;'>Ошибка! Сначала заполните все предыдущие страницы.</p>";
            echo "<p><a href='index.php'>Вернуться на страницу 1</a></p>";
            exit;
        }
        
        $surname = $_POST['surname'];
        $name = $_POST['name'];
        $patronymic = $_POST['patronymic'];
        $post = $_POST['post'];
        $category = $_POST['category'];
        $experience = $_POST['experience'];
    ?>

    <div align="center">
        <h3>Присоединяйтесь к группе pechora_proger!</h3>
        <p>Лучшие материалы по веб-разработке</p>
        <p>Только для своих!</p>
    </div>

    <form action="server.php" method="post">
        <input type="hidden" name="surname" value="<?= $surname; ?>">
        <input type="hidden" name="name" value="<?= $name; ?>">
        <input type="hidden" name="patronymic" value="<?= $patronymic; ?>">
        <input type="hidden" name="post" value="<?= $post; ?>">
        <input type="hidden" name="category" value="<?= $category; ?>">
        <input type="hidden" name="experience" value="<?= $experience; ?>">
        
        <input type="submit" name="submit" value="Завершить регистрацию">
    </form>

</body>
</html>