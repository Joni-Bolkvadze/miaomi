<?php

class testpage extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
       
    }
    public function page($pageNum=1)
    {    
        $this->load->model("img","getMore");
        $imgdata['imglist']=$this->getMore->getImgUser(($pageNum-1)*20,20);
        // $this->load->view("miaoHead",$this->getUserInfo());
        $this->load->view("imgList",$imgdata);
        

        $this->load->library('pagination');
        $config['base_url'] = base_url('/testpage/page/');
        $config['total_rows'] = 2000;
        $config['per_page'] = 20;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 2;
        $config['next_link'] = '下一页';
        $config['prev_link'] = '上一页';
        $config['last_link'] = '最末页';
        $config['first_link'] = '第一页';
        $this->pagination->initialize($config);

        echo $this->pagination->create_links();
        // $this->load->view("miaoFoot");    
    }
    



}