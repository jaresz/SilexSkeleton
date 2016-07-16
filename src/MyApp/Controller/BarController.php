<?php
namespace MyApp\Controller;
class BarController{

    public function indexAction(){
        return "Bar indexAction!";
    }

    public function showAction($id){
        return "Bar show: $id!";
    }

}