<?php

class imglist extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        
    }

    public function index()
    {   
        $this->page();
    }


    public function getUserInfo()
    {
        session_start();        
        if(isset($_SESSION['user']))
            return $_SESSION['user'];
        else return false;
    }

    // 得到图片信息的列表
    public function getImageListData()
    {
        $this->load->model("img","userUploadImg");
        $imgdata['imglist']=$this->userUploadImg->getImgUser(0,15);
        return $imgdata;
    }

    // 得到图片信息的列表
    public function getImageListDataApi($imgid)
    {
        $this->load->model("img","userUploadImg");
        $imgdata['imglist']=$this->userUploadImg->getImgUser(0,50);
        echo $imgdata;
    }

    public function getWhoLikeThisImg()
    {
        $imgid=$this->input->post("imgid");
        $this->load->model("like","getWho");
        $userListData=$this->getWho->getUserLike($imgid);
        echo json_encode($userListData);
    }

    public function page($pageNum=1)
    {    
        $this->load->model("img","getMore");
        $this->load->database();
        $imgdata['imglist']=$this->getMore->getImgUser(($pageNum-1)*20,20);
        $this->load->view("miaoHead",$this->getUserInfo());
        
        

        $this->load->library('pagination');
        $config['base_url'] = base_url('/imglist/page/');
        $config['total_rows'] = $this->db->count_all("img");
        $config['per_page'] = 20;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 5;
        $config['next_link'] = '下一页';
        $config['prev_link'] = '上一页';
        $config['last_link'] = '最末页';
        $config['first_link'] = '第一页';
        $config['cur_tag_open'] = '<b>';
        $config['cur_tag_close'] = '</b>';
        $this->pagination->initialize($config);

        $imgdata['pageNav']=$this->pagination->create_links();
        $this->load->view("imgList",$imgdata);
        $this->load->view("miaoFoot");    
    }

      
}
?>