<?php

require 'connection.php';

$app = new \atk4\ui\App('Party');
$app->initLayout('Admin');

if(isset($_SESSION['admin_access'])){
if($_SESSION['admin_access']=='gfaigfuoawgybfuwgyawugfy'){


$crud = $app->layout->add('CRUD');
$crud->setModel(new Friend($db));
$crud->addQuickSearch(['surname','phone_number','name','age']);

$app->layout->leftMenu->addItem(['Main Menu','icon'=>'book'],['index']);
}else{
  header('Location: index.php');
}
}else{
  header('Location: index.php');
}
