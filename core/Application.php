<?php 

namespace app\core;


class Application {

    public $router;
    public $request;

    public function __construct($rootPath)
    {
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
       echo $this->router->resolve();
    }



}