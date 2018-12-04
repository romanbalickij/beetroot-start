<?php


class Router{

    protected  $routes = [
            'GET    '=>[],
            'POST'   =>[]

    ];

    public  static  function load($file){
        $router = new self;

        require  $file;

        return $router;
    }

    public  function  get($url,$controller){
        $this->routes['GET'][$url] = $controller;
    }

    public  function  post($url,$controller){
        $this->routes['POST'][$url] = $controller;
    }

    public function direct($url,$method){
         $url =  parse_url($url,PHP_URL_PATH);
        if (isset($this->routes[$method][$url])){
            return $this->routes[$method][$url];
        }
           throw new Exception('Page not found');
    }
}