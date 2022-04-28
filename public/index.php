<?php

include "../config/config.php";

$page = 'index';
if(isset($_GET['page'])){
    $page = $_GET['page'];
}

$params = [];

switch($page){
    case 'index':
        $params['title'] = 'Главная';
        break;

    case 'catalog':
        $params['title'] = 'Каталог';
        $params['catalog'] = getCatalog();
        break; 
        
    case 'about':
        $params['title'] = 'О нас';
        $params['phone'] = 891461785777;
        break;

    case 'gallery':
        $params['title'] = 'Галерея';
        break;
    
    default:
        echo "484";
        die();
}

echo render($page, $params);