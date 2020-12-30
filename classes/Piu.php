<?php


class Piu
{
    private $id;
    private $user;
    private $text;
    private $likes;

    /**
     * Piu constructor.
     * @param $id
     * @param $user
     * @param $text
     * @param $likes
     */
    public function __construct($id, $user, $text, $likes)
    {
        $this->id = $id;
        $this->user = $user;
        $this->text = $text;
        $this->likes = $likes;
    }


}