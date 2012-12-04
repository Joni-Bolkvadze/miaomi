<?php

class image extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index($imgid)
    {

       $this->load->view("miaoHead",$this->getUserInfo());
      
        $this->load->model("img","imginfo");
        $imgData=$this->imginfo->getImgUserByImgID($imgid); 
        if($imgData){            
            $imguid=$imgData['imguid'];            
            $imgNextData=$this->imginfo->getImgNextID($imgid,$imguid);
            $imgPreData=$this->imginfo->getImgPreID($imgid,$imguid);            
            $imgCommentData=$this->imginfo->getCommentByImgID($imgid);
            $data['imgdata']=$imgData;
            $data['imgnext']=$imgNextData;
            $data['imgpre']=$imgPreData;
            $data['imgcomment']=$imgCommentData;
            // print_r($data);            
            $this->load->view("V_image",$data);
        }
        else echo("图片不存在哦！");
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