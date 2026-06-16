<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Программирование на языке PHP</title>
</head>
<body>
    <h1>Отправка данных на сервер</h1>
    <h2>Регулярные выражения, часть 1</h2>

    <?php
        $text = file_get_contents(__DIR__ . '/text.txt');

        $text = preg_replace('/\r\n|\r|\n/', '<br>', $text);

        $patterns = [];
        $patterns[] = "/\{pict1\}/";
        $patterns[] = "/\{pict2\}/";
        $patterns[] = "/\{pict3\}/";
        $patterns[] = "/\{pict4\}/";
        $patterns[] = "/\{pict5\}/";
        $patterns[] = "/\{pict6\}/";

        $pictures = [];
        $pictures[] = "<p><img src='pictures/pict1.jpg' width='500px'></p>";
        $pictures[] = "<p><img src='pictures/pict2.jpg' width='500px'></p>";
        $pictures[] = "<p><img src='pictures/pict3.jpg' width='500px'></p>";
        $pictures[] = "<p><img src='pictures/pict4.jpg' width='500px'></p>";
        $pictures[] = "<p><img src='pictures/pict5.jpg' width='500px'></p>";
        $pictures[] = "<p><img src='pictures/pict6.jpg' width='500px'></p>";

        $text = preg_replace($patterns, $pictures, $text);

        echo $text;
    ?>

</body>
</html>