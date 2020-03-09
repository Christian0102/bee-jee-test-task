<?php
return array(
       'admin/([a-z]+)/([0-9]+)' => 'admin/admin/$1/$2',
       'admin' => 'admin/view',
       'home/task/create' => 'home/create',
       //'home/([0-9]+)'=> 'home/view/$1',
       'home' => 'home/index',
       'index.php' => 'home/index',
       '' => 'home/index',
);
