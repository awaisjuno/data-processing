<?php return array (
  'hash' => '87808a712baae41b6d37695718abf017',
  'routes' => 
  array (
    'GET' => 
    array (
      '/' => 
      array (
        'controller' => 'Pages',
        'method' => 'index',
        'middleware' => 
        array (
        ),
      ),
      '/signin' => 
      array (
        'controller' => 'User',
        'method' => 'signin',
        'middleware' => 
        array (
        ),
      ),
      '/signup' => 
      array (
        'controller' => 'User',
        'method' => 'signup',
        'middleware' => 
        array (
        ),
      ),
      '/dashboard' => 
      array (
        'controller' => 'User',
        'method' => 'dashboard',
        'middleware' => 
        array (
        ),
      ),
      '/data_set/{id}' => 
      array (
        'controller' => 'DataSet',
        'method' => 'training',
        'middleware' => 
        array (
        ),
      ),
    ),
    'POST' => 
    array (
      '/signin' => 
      array (
        'controller' => 'User',
        'method' => 'signin',
        'middleware' => 
        array (
        ),
      ),
      '/signup' => 
      array (
        'controller' => 'User',
        'method' => 'signup',
        'middleware' => 
        array (
        ),
      ),
      '/data_set/{id}' => 
      array (
        'controller' => 'DataSet',
        'method' => 'training',
        'middleware' => 
        array (
        ),
      ),
    ),
  ),
);