<?php
require_once __DIR__ . '/CreditCard.php';

class Registered extends User
{
    public $user;
    protected $password;
    public $registered = true;



    public function Register($_user, $_password)
    {
        $this->user = $_user;
        $this->password = $_password;
    }
}
