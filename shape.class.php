<?php
abstract class Shape {
    public $shapeName;
    //规范circle、triangle、rect中必须有area()、perimeter()方法
    abstract function area();
    abstract function perimeter();

    public function setShapeName($shapeName)
    {
        $this->shapeName = $shapeName;
        return $this;
    }
    //判断输入的数字是否为大于0的有效数字
    protected function validate($value, $message="形状"){
        if($value == "" || !is_numeric($value) || $value < 0 ){
            echo '<font color="red"> '.$message.' 必须为非负值的数字，并且不能为空 </font><br>';
            return false;
        } else {
            return true;
        }
    }
}

/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/4/15
 * Time: 16:42
 */