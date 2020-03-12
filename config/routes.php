<?php
return array(
       'auth/login' => 'auth/login',
       'auth/logout' => 'auth/logout',
       'admin/task/update/([0-9]+)' => 'admin/update/$1',
       'admin/task/create' => 'admin/create',
       'admin' => 'admin/index',
       'home/task/create' => 'home/create',
       //'home/([0-9]+)'=> 'home/view/$1',
       'home' => 'home/index',
       'index.php' => 'home/index',
       '' => 'home/index',
);
