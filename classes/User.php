<?php


class User {

    private $id;
    private $name;
    private $userName;
    private $email;
    private $password;

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


}