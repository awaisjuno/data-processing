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
        $models = $this->select('data_set');
        return $models;
    }

    public function fetchvalues($code)
    {
        return $this->where('code', $code)
            ->get('training_data');
    }

    public function insertTrainingData($insertData)
    {
        $this->insert('training_data', $insertData);
    }

    public function findLogin($email, $password)
    {
        return $this->where('email', $email)
            ->where('password', $password)
            ->first('user');
    }

    public function insertDataSet($data)
    {
        $this->insert('data_set', $data);
    }

}
