<?php
/**
 * Created by PhpStorm.
 * User: ljw
 * Date: 2016/2/11
 * Time: 19:06
 */

class  People{

    private $_name,$_age;
    private $NUM = 0;
    const MAX_NUM =200;

    /**
     * People constructor.
     * @param String $name
     * @param int $age
     */
    public function __construct($name,$age){
        $this->_name = $name;
        $this->_age = $age;
        People::$NUM++;
        if(People::$NUM>People::MAX_NUM){
            throw new Exception("不能创建更多人");
        }
    }

    public function getName(){
        return $this->_name;
    }

    public function getAge(){
        return $this->_age;
    }

    public function say(){
        echo "hello";
    }

    static function work(){
        echo "这是静态方法";
    }
}