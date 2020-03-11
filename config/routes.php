<?php
return array(
       'auth/login'=>'auth/login',
       'auth/logout'=>'auth/logout',
       'admin/([a-z]+)/([0-9]+)' => 'admin/admin/$1/$2',
       'admin' => 'admin/index',
       'home/task/create' => 'home/create',
       //'home/([0-9]+)'=> 'home/view/$1',
       'home' => 'home/index',
       'index.php' => 'home/index',
       '' => 'home/index',
);
