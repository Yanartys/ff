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
    <h2>Данные сохранены</h2>
    
    <?php
        if (isset($_POST['submit'])) {
            
            echo "<h3>Полученные данные:</h3>";
            
            echo "<p><strong>Имя:</strong> " . $_POST['name'] . "</p>";
            echo "<p><strong>E-mail:</strong> " . $_POST['email'] . "</p>";
            
            echo "<p><strong>Выбранные курсы:</strong><br>";
            if (isset($_POST['lang'])) {
                foreach ($_POST['lang'] as $lang) {
                    echo "&nbsp;&nbsp;- " . $lang . "<br>";
                }
            } else {
                echo "&nbsp;&nbsp;Не выбрано ни одного курса";
            }
            echo "</p>";
            
            echo "<p><strong>Форма обучения:</strong> " . $_POST['form'] . "</p>";
            
            echo "<p><strong>Интересующие направления:</strong><br>";
            if (isset($_POST['interes'])) {
                foreach ($_POST['interes'] as $interes) {
                    echo "&nbsp;&nbsp;- " . $interes . "<br>";
                }
            } else {
                echo "&nbsp;&nbsp;Не выбрано ни одного направления";
            }
            echo "</p>";
            
            echo "<hr>";
            echo "<h3>Массив \$_POST:</h3>";
            echo "<pre>";
            print_r($_POST);
            echo "</pre>";
            
            echo "<p><a href='index.php'>Вернуться к редактированию</a></p>";
            
        } else {
            echo "<p style='color: red;'>Ошибка! Данные не получены.</p>";
            echo "<p><a href='index.php'>Вернуться к форме</a></p>";
        }
    ?>

</body>
</html>