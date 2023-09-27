<?php


require_once 'classes/Request.php';
require_once 'classes/Session.php';
require_once 'classes/Validation/Validation.php';

use Route\Week12\Todo\classes\Request;
use Route\Week12\Todo\classes\Session;
use Route\Week12\Todo\classes\Validation\Validation;
use Route\Week12\Todo\classes\Validation\Validator;


$request = new Request;

$session = new Session;

$validation = new Validation;
