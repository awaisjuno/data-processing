<?php

namespace App\Model;

use System\Model;

class UserModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function insertLogin($login) 
    {
        $this->insert('user', $login);
        return $this->lastInsertId();
    }


    public function insertUserDetails($userDetail) 
    {
        $this->insert('user_detail', $userDetail);
    }

    public function createModel($data)
    {
        $this->insert('model', $data);
    }

    public function fetchModel()
    {
        $models = $this->select('model');
        return $models;
    }

}
