# vkphpbot
Бот для ВКонтакте написанный на PHP, использует Callback API. Пример: https://vk.com/iusephpbtw
#### ОСТОРОЖНО! ГОВНОКОД !!!!
# Настройка
Создайте файл config.php и впишите туда:
``` php
<?php
$confirmation_token = "токен для подтверждения сервера";
$token="токен группы";

$dbhost="localhost или что нибудь еще";
$dbuser="пользователь бд";
$dbpassword="пароль пользователя бд";
$dbname="имя бд";
$admins=array("overpie", "собственно админы для доступа к консоли");
?>
```

Затем, запустите скрипт prepare\_db.php для инициализации MySQL

Также, нужно установить библиотеки PHP:
```
php-pdo-mysql
php-gd
php-json
php-curl
```
