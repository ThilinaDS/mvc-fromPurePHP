<?php

class Home extends Controller {

    protected $user;

    public function __construct(){
        
        $this->user = $this->model('User');

    }

    public function index($name = ''){

        //echo 'home/index';

       //$user =  $this->model('User');//pass the Class Name User to method model in Controller class

       $user =  $this->user;

       $user->name = $name;// User class object -> name variable
       //echo $user->name;

       //view method in Controller Class, pass view location and parameter array
       $this->view('home/index', ['name'=>$user->name]);

       //$this->view('home/index', ['name'=>$user->name,'emails'=>'something']);

    }

    //just demo. we are normally not doing this way
    public function create($username = '', $email = ''){

        /*$this->user->create([
            'username' => $username,
            'email' => $email
        ]);*/

        User::create([
            'username' => $username,
            'email' => $email
        ]);


    }

    public function update($username = '', $email =''){

        User::where('username', $username)
            ->update(['email' => $email]);

    }

    public function test(){

        echo 'home/test';

    }


}



?>