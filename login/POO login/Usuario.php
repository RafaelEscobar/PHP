<?php
class Usuario {
    public $email;
    private $password;

    public function __construct() {
        $this->email = 'a@a.co';
        $this->password = '1234';

    }
}