<?php

define('TEMPLATES_DIR', 'templates/');
define('LAYOUTS_DIR', 'layouts/');

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
    
    default:
        echo "484";
        die();
}

function getCatalog()
{
    return
    [
    [
        'name' => 'яблоко',
        'price' => 24,
        'image' => 'apple.jpg',
    ],
    [
        'name' => 'яблоко',
        'price' => 24,
        'image' => 'apple.jpg',
    ],
    [
        'name' => 'яблоко',
        'price' => 24,
        'image' => 'apple.jpg',
    ]
    ];
}



echo renderTemplate(LAYOUTS_DIR . 'main', [
    'title' => $params['title'],
    'menu' => renderTemplate('menu', $params),
    'content' => renderTemplate($page, $params)
]);

function renderTemplate($page, $params = [])
{
    extract($params);

    ob_start();
    include TEMPLATES_DIR . $page . ".php";
    return ob_get_clean();
}