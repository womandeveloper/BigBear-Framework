<?php

use BigBear\System\Router;

Router::get('/login', 'Authentication:view');
Router::post('/login', 'Authentication:login');
Router::get('/logout', 'Authentication:logout');

Router::get('/', 'Index:index');



