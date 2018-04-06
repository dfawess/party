<?php
require 'vendor/autoload.php';
require 'app.php';

$app = new App('public');
//$app->initLayout('Centered');
//$db = new \atk4\data\Persistence_SQL('mysql:dbname=party;host=localhost','root','');
$db=$app->db;
session_start();



class Friends extends \atk4\data\Model {
  public $table = 'friends';
  function init() {
    parent::init();
    $this->addField('name');
    $this->addField('surname');
    $this->addField('phone_number',['default'=>'+371']);
    $this->addField('age',['enum'=>['15','16','17','18']]);

  }
}

/*$a = [];

    $m_register = new \atk4\data\Model(new \atk4\data\Persistence_Array($a));

    $m_register->addField('name');



    $f = $app->add(new \atk4\ui\Form(['segment'=>TRUE]));

    $f->setModel($m_register);
*/



$form = $app->layout->add('Form');
$form->setModel(new Friends($db));
/*$form->onSubmit(function($form) {

});*/

$form->onSubmit(function ($form) use($app) {
   $form->model->save();
   $form->success('Record updated');
   return $app->jsRedirect(['index']);
 });



$crud = $app->layout->add('Crud');
$crud->setModel(new Friends($db));
$crud->addQuickSearch(['surname']);
