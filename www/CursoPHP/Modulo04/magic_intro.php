<?php
class Magic_intro{

    public function __construct()
    {
        print "Metodo construtor ...<br>";
    }

    public function __destruct()
    {
        print "Metodo destrutor";
    }

}

$mi = new Magic_intro();