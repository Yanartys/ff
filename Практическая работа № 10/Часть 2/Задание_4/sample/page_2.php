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
    <h2>Регистрация. Страница 2</h2>

    <?php
        if (!isset($_POST['surname']) || !isset($_POST['name']) || !isset($_POST['patronymic'])) {
            echo "<p style='color: red;'>Ошибка! Сначала заполните страницу 1.</p>";
            echo "<p><a href='index.php'>Вернуться на страницу 1</a></p>";
            exit;
        }
        
        $surname = $_POST['surname'];
        $name = $_POST['name'];
        $patronymic = $_POST['patronymic'];
    ?>

    <form action="page_3.php" method="post">
        Должность: <input type="text" name="post"><p>
        Категория: <input type="text" name="category"><p>
        Стаж: <input type="text" name="experience"><p>   
        
        <input type="hidden" name="surname" value="<?= $surname; ?>">
        <input type="hidden" name="name" value="<?= $name; ?>">
        <input type="hidden" name="patronymic" value="<?= $patronymic; ?>">
        
        <input type="submit" name="submit" value="Далее">
    </form>

</body>
</html>