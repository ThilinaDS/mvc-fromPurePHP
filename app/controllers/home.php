<?php

class Home extends Controller {


    public function index($name = ''){

        //echo 'home/index';

       $user =  $this->model('User');//pass the Class Name User to method model in Controller class
       $user->name = $name;// User class object -> name variable
       //echo $user->name;

       //view method in Controller Class, pass view location and parameter array
       $this->view('home/index', ['name'=>$user->name]);

       //$this->view('home/index', ['name'=>$user->name,'emails'=>'something']);

    }

    public function test(){

        echo 'home/test';

    }


}



?>