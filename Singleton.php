<?php


 class Singleton
{
    private $value;
    private static $instance;

    private function __construct (){}

    public static function getInstance () {
        if (empty(self::$instance)){
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function setValue($value){
        $this->value = $value;
    }

    public function getValue(){
        return $this->value;
    }
}