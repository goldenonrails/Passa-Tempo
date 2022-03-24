<?php

class Home{

    public function init(){
        $tema = new Template();
        $notificacao = new Notif();

        echo $tema->template();
        echo $notificacao->notifique('<a href="#">Seu HTML foi criado!</a>');
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

class Notif{

    public function notifique($mensagem){
        echo $mensagem;
    }
}

$e = new Home();
$e->init();