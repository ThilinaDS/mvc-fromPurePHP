<?php



class App {

    protected $controller = 'home';//defualt page

    protected $method = 'index';//default method

    protected $params = [];//parameter array

    public function __construct(){

        //echo 'OK';
        //print_r($this->parseUrl());

        $url = $this->parseUrl();

        //check url is not empty and whether the file exists
        if($url != '' AND file_exists('../app/controllers/'. $url[0] .'.php')){
            $this->controller = $url[0];
            unset($url[0]);

        }
        //print_r($url);

        //if $controller is not set we have defult value
        require_once '../app/controllers/' . $this->controller . '.php';

        $this->controller = new $this->controller;// create new controller object

        if(isset($url[1])){

            if(method_exists($this->controller,$url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }


        }

        //print_r($url);

        $this->params = $url ? array_values($url) : [];//check url has values or not

        //print_r($this->params);

        call_user_func_array([$this->controller, $this->method],$this->params);// call user function using class name, method name and parameter name

    }

    //get the url and explode in to an array
    //ex: home/index/params - > [0] -> home, [1]-> index, [2]-> params
    public function parseUrl(){

        if(isset($_GET['url'])){
            
           // echo $_GET['url'].'<br>';

            return $url = explode('/',filter_var(rtrim($_GET['url'],'/'), FILTER_SANITIZE_URL));

        }

    }


}



?>