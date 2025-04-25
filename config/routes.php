<?php

use System\Routing;

Routing::get('/', 'Pages@index');

Routing::get('/signin', 'User@signin');
Routing::POST('/signin', 'User@signin');

Routing::get('/signup', 'User@signup');
Routing::post('/signup', 'User@signup');


Routing::get('/dashboard', 'User@dashboard');
Routing::get('/data_set/{id}', 'DataSet@training');
Routing::post('/data_set/{id}', 'DataSet@training');

//Routing::get('/home/{id}', 'Pages@home');
