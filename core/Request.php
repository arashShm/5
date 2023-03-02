<?php 
namespace Core ;

class Request{

    //Method
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI']?? '/' ;
        $position = strpos($path , '?') ;
        if($position === false){
            return $path ;
        }
        return substr($path,0,$postion);
    }


    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

}