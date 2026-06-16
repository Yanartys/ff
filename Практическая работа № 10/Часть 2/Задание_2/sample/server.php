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
    <h2>Оформление заказа</h2>
    
    <?php
        if (isset($_POST['submit'])) {
            
            echo "<h3>Данные о заказчике:</h3>";
            echo "<p><strong>Фамилия:</strong> " . $_POST['surname'] . "</p>";
            echo "<p><strong>Имя:</strong> " . $_POST['name'] . "</p>";
            echo "<p><strong>E-mail:</strong> " . $_POST['email'] . "</p>";
            
            echo "<h3>Данные о заказах:</h3>";
            
            echo "<h4>print_r(\$_POST['order']):</h4>";
            echo "<pre>";
            print_r($_POST['order']);
            echo "</pre>";
            
            echo "<h4>print_r(\$_POST['order'][1]):</h4>";
            echo "<pre>";
            print_r($_POST['order'][1]);
            echo "</pre>";
            
        } else {
            echo "<p>Заполните, пожалуйста, форму!</p>";
            echo "<p><a href='index.php'>Вернуться к форме</a></p>";
        }
    ?>

</body>
</html>