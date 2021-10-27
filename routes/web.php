<?php




$router->group(['prefix' => 'api'], function() use ($router){
    $router->post('/login', 'AuthController@login');
    $router->post('/register', 'AuthController@register');

    $router->group(['middleware' => 'auth'], function () use ($router){
        $router->get('/user', 'AuthController@user');
    });
});
