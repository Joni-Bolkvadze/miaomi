<?php

class image extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index($imgid)
    {

       $this->load->view("miaoHead",$this->getUserInfo());
       $this->load->view("V_image");   
       $this->load->view("miaoFoot");   
    }
    
    public function getUserInfo()
    {
        session_start();        
        if(isset($_SESSION['user']))
            return $_SESSION['user'];
        else return false;
    }
}