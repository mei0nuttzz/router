<?php
//$route = new \Bramus\Router\Router();

$route = new \PHPRouter\PHPRouter\Router();


$route->get('/', function () {
    echo 'Pagina acasa';
});

$route->go('get', '/2/{id:^\d*$}', function ($id) {
    echo '<h1>your numeric id is : ' . $id . '</h1>';
});

$route->post('/1/{id:^\d*$}', function ($id) {
    echo '<h1>your numeric id is : ' . $id . '</h1>';
});

if (!\PHPRouter\PHPRouter\Router::$founded) {
    echo 'Pagina nu a fost gasita';
}
