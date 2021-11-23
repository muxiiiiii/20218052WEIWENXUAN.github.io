<?php
    class Result{
        private $shape;

        function __construct()
        {
            switch($_POST['action']){
                case 'rect':
                    $this->shape=new Rect();
                    break;
                case 'triangle':
                    $this->shape=new Triangle();
                    break;
                case 'circle':
                    $this->shape=new Circle();
                    break;
                default:
                    $this->shape=false;
            }
        }

        /**
         * @return string
         */
        function __toString()
        {
            // TODO: Implement __toString() method.
            if($this->shape){
                $result.=$this->shape->shapeName.'Area:'.$this->shape->area().'<br>';
                return $result;
            }else{
                return 'No this Shape';
            }
        }
    }
