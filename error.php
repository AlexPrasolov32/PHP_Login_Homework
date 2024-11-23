<?php
header('HTTP/1.1 404 Not Found');
http_response_code(404);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ошибка 404 - Страница не найдена</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        h1 { font-size: 50px; }
        p { font-size: 20px; }
    </style>
</head>
<body>
<h1>404</h1>
<p>Страница не найдена.</p>
<p>Извините, но запрашиваемая вами страница не существует.</p>
<p><a href="/">Вернуться на главную страницу</a></p>
</body>
</html>