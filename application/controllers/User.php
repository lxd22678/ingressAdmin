<?php
/**
 * Created by PhpStorm.
 * User: era
 * Date: 2016/4/6
 * Time: 15:49
 */
require_once(APPPATH."controllers/AbstractController.php");

class User extends AbstractController{
    /**
     * @var User_model
     */
    public $user_model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model("user_model");
    }

    public function index()
    {
        $user = $this->user_model->getUserByName("user1");
        $this->response($user);
    }
}