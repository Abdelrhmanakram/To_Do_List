<?php

namespace Route\Week12\Todo\classes\Validation;


require_once 'Validator.php';
use Route\Week12\Todo\classes\Validation\Validator;

class Str implements Validator{


    public function check($key , $value){
        
        if(is_numeric($value)){
            return " $key must be string";
        }else{
            return false;
        }
    }
}