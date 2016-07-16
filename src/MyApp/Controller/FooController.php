<?php
namespace MyApp\Controller;
class FooController{

    public function indexAction(){
        return "Foo indexAction!";
    }

    public function showAction($id){
        return "Foo show: $id!";
    }

}