<?php return array (
  'hash' => '343d7038ca1653823d1c20e6b7f8741a',
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
    ),
  ),
);