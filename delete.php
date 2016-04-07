<?php
function call (){
        echo 'called once<br/>';
}

class articles{
    public $text = 'text<br/>';
    private function show (){
        echo 'called<br/>';
    }
}

class news{
    public $text = 'text<br/>';
    private function show (){
        echo 'called<br/>';
    }
}

call ();
$a = new articles();
$a->call();
$b = new articles();
$a->call();+
$a->call();
