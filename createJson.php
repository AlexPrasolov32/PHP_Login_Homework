<?php
function generateRandomWord() : string
{
    $alphabet = [
        'а', 'б', 'в', 'г', 'д', 'е', 'ё', 'ж', 'з', 'и',
        'й', 'к', 'л', 'м', 'н', 'о', 'п', 'р', 'с', 'т',
        'у', 'ф', 'х', 'ц', 'ч', 'ш', 'щ', 'ъ', 'ы', 'ь',
        'э', 'ю', 'я'
    ];
    $word = '';
    for ($i = 0; $i < 5; $i++) {
        $randomLetter = $alphabet[array_rand($alphabet)];
        $word .= $randomLetter;
    }
    return $word;
}
$passwords = ['users' =>[[]]];
/** $passwords = ['users' =>[ [ 'login'=> '1', 'password' => '1']]];
$passwords['users'][1] = ['login' => '2', 'password' => '2'];
/ $passwords['users'][1] = ['login' => generateRandomWord(), 'password' => md5('Яблоко')];
$passwords['users'][2] = ['login' => generateRandomWord(), 'password' => md5('Яблоко')];
$passwords['users'][3] = ['login' => generateRandomWord(), 'password' => md5('Яблоко')];
print_r($passwords);*/
for ($i = 0; $i < 10000; $i++) {
    $passwords['users'][$i] = ['login' => implode([generateRandomWord(), strval($i)]), 'password' => md5('Яблоко')];
}
$jsonF = json_encode($passwords);
file_put_contents('password.json', $jsonF);