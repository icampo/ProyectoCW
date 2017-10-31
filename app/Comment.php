<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $name = null;
    protected $email = null;
    protected $message = null;

    function __construct($name, $email, $message)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->setMessage($message);
    }

    public function setName($name){
        $this->name = ucfirst(strtolower($name));
    }

    public function getName(){
        return $this -> name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this -> email;
    }

    public function setMessage($message){
        $this->message = $message;
    }

    public function getMessage(){
        return $this -> message;
    }

}
