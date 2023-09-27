<?php

namespace Route\Week12\Todo\classes\Validation;

require_once 'Validator.php';
use Route\Week12\Todo\classes\Validation\Validator;


class Required implements Validator{


    public function check($key , $value){

            if(empty($value)){
                return " $key is requried";
            }else{
                return false;
            }
    }
}