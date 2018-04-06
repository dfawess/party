<?php
require 'vendor/autoload.php';

if (isset($_ENV['CLEARDB_DATABASE_URL'])) {
     $db = \atk4\data\Persistence::connect($_ENV['CLEARDB_DATABASE_URL']);
 } else {
     $db = \atk4\data\Persistence::connect('mysql:host=eu-mm-auto-dub-01-b.cleardb.net;dbname=heroku_d6f5fd68101f5d4;charset=utf8', 'b3484af324fedb', '73d52b5043cbe42');
 }

class Friend extends \atk4\data\Model {
    public $table = 'party-dfawess';
    function init() {
        parent::init();
        $this->addField('name',['caption'=>'Имя','required'=>TRUE]);
        $this->addField('surname',['caption'=>'Фамилия','required'=>TRUE]);
        $this->addField('phone_number',['caption'=>'Номер телефона','required'=>TRUE,'default'=>'+371','type'=>'integer']);
        $this->addField('age',['caption'=>'Возраст','required'=>TRUE,'enum'=>['14','15','16','17','18','19']]);
    }
}
