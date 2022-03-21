<?php

class Router {

    private $app;

    public function __construct($app){
        $this->app = $app;
    }

    public function call($method, $url, $action){
        return $this->app->$method($url, function() use ($action){
            $action = explode('@', $action);
            $controller_name = $action[0];
            $method = $action[1];
            $controller = new $controller_name($this->app);
            call_user_func_array([$controller, $method], func_get_args());
        });
    }

    public function post($url, $action){
        return $this->call('post', $url, $action);
    }

    public function get($url, $action){
        return $this->call('get', $url, $action);
    }

} 