<?php
/**
 * Created by PhpStorm.
 * User: ljw
 * Date: 2016/2/11
 * Time: 19:07
 */

require_once "People.php";

People::work();
for($i=1;$i<300;$i++){
    new People("xiaoming",12);
}
