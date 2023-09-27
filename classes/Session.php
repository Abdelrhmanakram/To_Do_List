<?php

namespace Route\Week12\Todo\classes;

class Session {
    //start
    public function __construct()
    {
        session_start();
    }

    //set 

    public function set($key,$value){
        $_SESSION[$key] = $value;
    }

    //get

    public function get($key){

        return (isset($_SESSION[$key]))? $_SESSION[$key] : null;

    }

    // remove

    public function remove($key){
        unset($_SESSION[$key]);
    }
    //destroy

    public function destroy(){
        session_destroy();
    }
    public function check($key){
        return isset($_SESSION[$key]);
    }
}