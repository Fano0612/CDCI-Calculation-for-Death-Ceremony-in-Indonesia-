<?php

class Connection{
    public function __construct()
    {
        $this->mysqli = new mysqli('localhost', 'root', '','counting');
    }
    public function ConnectTo(){
        return $this->mysqli;
    }
   

}