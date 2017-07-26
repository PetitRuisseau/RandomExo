<?php

namespace truc;

class User {
    private $id;
    private $pseudo;
    private $password;
    private $birth;
    private $email;

    public function __construct($pseudo, $password, $birth, $email, $id = null) {
        $this->id = $id;
        $this->pseudo = $pseudo;
        $this->password = $password;
        $this->birth = $birth;
        $this->email = $email;
    }
}