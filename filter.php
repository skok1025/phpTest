<?php 
$sMessage = filter_var(10, FILTER_SANITIZE_STRING);
var_dump($sMessage);

$sEmail = 
filter_var(
    'skok1025@naver.com', 
    FILTER_VALIDATE_EMAIL, 
    FILTER_SANITIZE_EMAIL
);
var_dump($sEmail);

echo filter_var('Hello World', FILTER_CALLBACK, [
    'options' => function ($param) {
        return $param;
    }
]);

echo filter_var(
    '<html><head></head></html>',
    FILTER_SANITIZE_SPECIAL_CHARS);

var_dump(
    filter_input(
        INPUT_SERVER, 
        'REMOTE_ADDR', 
        FILTER_VALIDATE_IP
    )
);


var_dump($_SERVER);

?>
