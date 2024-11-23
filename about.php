<?php
$login = $_POST['login']; // хбныь0 Пробный логин
$Password = $_POST['Password']; // Яблоко Пробный пароль
$jsonData = file_get_contents('password.json');
$dataArray = json_decode($jsonData, true);
$flag = false;
foreach ($dataArray['users'] as $user) {
    if ($login == $user["login"] && md5($Password) == $user["password"]) {
        $currentDateTime = date('Y-m-d H:i:s');
        $flag = true;
        $serverInfo = [
            'IP-адрес' => $_SERVER['REMOTE_ADDR'],
            'Запрашиваемый URI' => $_SERVER['REQUEST_URI'],
            'Браузер' => $_SERVER['HTTP_USER_AGENT']];
        require_once ('about.html');
        break;
    }
}
if (!$flag) {
    header("location: index.php");
}

