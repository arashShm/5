<?php 
namespace Core ;


class Response{

    //Method
    public function setStatusCode(int $code)
    {
        http_response_code($code) ;
    }
}