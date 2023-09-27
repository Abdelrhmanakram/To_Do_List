<?php
namespace Route\Week12\Todo\classes\Validation;


interface Validator {

    public function check($key , $value);
}