<?php

class App{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct(){
        $url = $this->parseURL();
        // var_dump($url);
        // echo 'nganu';
        // ini untuk controller
        if(isset($url[0])){
            // $url0 = $url[0];
            if(file_exists('../app/controllers/'. $url[0] .'.php')){
                $this->controller = $url[0];
                // var_dump($url);
                unset($url[0]);
                // var_dump($this->controller);
                // echo $this->controller;
                // var_dump($url);
            }else{
                // echo 'tidak ada Controllernya';
            }
        }
        
        require_once '../app/controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        // ini untuk method
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
                // var_dump($url);
            }
            else{
                // echo "tidak ada Method";
            }
        }

        // ini untuk parameter
        if(!empty($url)){
            // var_dump($url);
            // echo $this->method;
            $this->params = array_values($url);
        }

        // jalankan controller dan method, serta kirimkan params jika ada
        call_user_func_array([$this->controller,$this->method],$this->params);


    }

    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }


}