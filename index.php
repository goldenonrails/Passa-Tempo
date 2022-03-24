<?php

class Home{

    public function init(){
        $tema = new Template();
        echo $tema->template();
    }

}

Class Template{

    public $template = '
    <!DOCTYPE html>
    <html>
    <head>
        <title>Document</title>
    </head>
    <body>
        Hello, World
    </body>
    </html>';

    public function template(){
        echo $this->template;
    }
}

$e = new Home();
$e->init();