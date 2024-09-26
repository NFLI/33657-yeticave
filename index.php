<?php
require_once 'functions.php';
require_once 'data.php';
$is_auth = (bool) rand(0, 1);

$user_name = 'Константин';
$user_avatar = 'img/user.jpg';


$page_content = templater('templates/index.php', ['product' => $product_info]);

$output = templater('templates/layout.php', ['content' => $page_content, 'title' => 'Yeticave - Главная']);

print($output);
