<?php

class Model
{
    public $string;
  
    public function __construct()
    {
        $this->string = "MVC + PHP = Awesome!";
    }
}


class Controller
{
    private $model;
  
    public function __construct($model) {
        $this->model = $model;
    }

    public function clicked() {
        $this->model->string = "Updated Data, thanks to MVC and PHP!";
    }

}

class View
{
    private $model;
    private $controller;
  
    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }
      
   public function output(){
        return '<a href="?action=clicked">'.$this->model->string."</a>";
    }


}

