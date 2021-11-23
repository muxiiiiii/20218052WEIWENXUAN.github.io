<?php
    //根据index中提交的不同action的值返回不同的表单
    class Form{
        private $action;
        private $shape;
        //构造方法
        function __construct($action=""){
            $this->action = $action;
            $this->shape=isset($_REQUEST["action"])?$_REQUEST["action"]:"rect";
        }

        function __toString()
        {
            // TODO: Implement __toString() method.
            $form='<form action="'.$this->action.'"  method="post">';
            switch($this->shape){
                case "rect":
                    $form.=$this->getRect();
                    break;
                case "triangle":
                    $form.=$this->getTriangle();
                    break;
                case "circle":
                    $form.=$this->getCircle();
                    break;
                default:
                    $form.='请选择一个形状<br>';
            }
            $form.='<input type="submit" name="sub" value="计算">';
            $form.='</form>';
            return $form;
        }
        private function getRect(){
            $input='<b>Please enter the | Rect | Width and Height：</b><p>';
            $input.='Width：<input type="text" name="width" value="'.$_POST['width'].'"><br>';
            $input.='Heigh：<input type="text" name="height" value="'.$_POST['height'].'"><br>';
            $input.='<input type="hidden" name="action" value="rect">';
            return $input;
        }
        private function getTriangle(){
            $input='<b>Please enter the ｜ Triangle ｜ Three sides：</b><p>';
            $input.='The first part: <input type="text" name="side1" value="'.$_POST['side1'].'" ><br>';
            $input.='The second side: <input type="text" name="side2" value="'.$_POST['side2'].'" ><br>';
            $input.='The third part: <input type="text" name="side3" value="'.$_POST['side3'].'" ><br>';
            $input.='<input type="hidden" name="action" value="triangle">';
            return $input;
        }
        private function getCircle(){
            $input='<b>Please enter the ｜ Circle ｜ Radius：</b><p>';
            $input.='Radius: <input type="text" name="radius" value="'.$_POST['radius'].'" ><br>';
            $input.='<input type="hidden" name="action" value="circle">';
            return $input;
        }

    }
