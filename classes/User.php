<?php


class User {

    private $id;
    private $name;
    private $userName;
    private $email;
    private $password;
    private $tweets;

    /**
     * User constructor.
     * @param $id
     * @param $name
     * @param $userName
     * @param $email
     * @param $password
     */
    public function __construct($id, $name, $userName, $email, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
    }

    public static function Signup(){

    }

    public static function getUserbyId(){


    }

}