<?php

require_once '../inc/connection.php';
require_once '../App.php';

if($request->checkPost("submit")){

    $note = $request->clean($request->post("note"));

    // validation 


    $validation->validate("note",$note,["Required","Str"]); // validation
    $errors =   $validation->getError();









    if(empty($errors)){

     $stm =    $conn->prepare("insert into todo(`note`) values(:note)");
    $stm->bindParam(":note",$note,PDO::PARAM_STR);
    $out =  $stm->execute();
    if($out){
        $session->set("success","data inserted successfuly");
        $request->header("../index.php");
    }else{

        $session->set("errors",["error"]);
        $request->header("../index.php");
    }
    }else{

        $session->set("errors",$errors);
        $request->header("../index.php");
        // index , sesseion
    }

}else{

    $request->header("../index.php");
}



// insert

// return errors

