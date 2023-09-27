<?php

require_once '../inc/connection.php';

require_once '../App.php';

// submit , id 

if($request->checkGet("id")&& $request->checkPost("submit")){

    $id = $request->get("id");
    $note = $request->clean($request->post("note"));

    // validation
    $validation->validate("note",$note,["Required","str"]);
    $errors =  $validation->getError();

    if(empty($errors)){

       $stm =  $conn->prepare("select id from todolist where id=:id");
        $stm->bindParam(":id",$id);
        $stm->execute();
        if($stm->rowCount()>0){

            $stm =  $conn->prepare("update todolist set `note`=:note where id=:id");
            $stm->bindParam(":note",$note,PDO::PARAM_STR);
            $stm->bindParam(":id",$id,PDO::PARAM_INT);
            $out =  $stm->execute();
            
            if($out){
                $session->set("success","data updated successfuly");
                $request->header("../index.php");
            }else{
                $session->set("errors",["error"]);
                $request->header("../index.php");
            }
        }else{

            $session->set("errors",["not found"]);
            $request->header("../index.php");
        }
    }else{
        $session->set("errors",$errors);
        $request->header("../edit.php?id=$id");
    }

    // update

    // re

}else{
    $request->header("../index.php");
}