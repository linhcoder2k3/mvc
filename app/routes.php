<?php 

// action là callback
$router->get('/', 'HomeController@index');
$router->get('/test/{id}', 'HomeController@test',['AuthMiddleware@isLogin']);