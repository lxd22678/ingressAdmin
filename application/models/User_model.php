<?php
/**
 * Created by PhpStorm.
 * User: era
 * Date: 2016/4/6
 * Time: 16:53
 */
require_once ("AbstractModel.php");
class User_model extends AbstractModel{
    
    private $_db;
    
    public function __construct()
    {
        parent::__construct();
        $this->_db = $this->connectDB("ingress");
    }

    public function getUserByName($user_name)
    {
        $query = $this->_db->where("userName", $user_name)->get("Data_User");
        return $query->row_array();
    }
}