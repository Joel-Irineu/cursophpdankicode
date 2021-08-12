<?php
/**
 * Esta classe é de exemplo
 */
class Exemplo{
    private $var1;
    public $var2;

    public function metodo1(){
        echo 'metodo publico ';
    }
    private function metodo2(){
        echo 'metodo privadp ';

    }

    public static $var3 = 'irineu';

    public function setVar1($var1){
        $this -> var1 = $var1;
    }

    public function pegaVar1(){
        return $this -> var1;
    }
}
?>