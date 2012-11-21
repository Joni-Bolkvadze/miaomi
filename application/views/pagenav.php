<?php 
        $this->load->library('pagination');
        $config['base_url'] = base_url('/imglist/page/');
        $config['total_rows'] = 2000;
        $config['per_page'] = 20;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 10;
        $config['next_link'] = '下一页';
        $config['prev_link'] = '上一页';
        $config['last_link'] = '最末页';
        $config['first_link'] = '第一页';
        $this->pagination->initialize($config);
        echo $this->pagination->create_links();
?>