<?php

class Img extends CI_Model {
    
    function __construct()
    {
        parent::__construct();
    }
    
    //插入新用户
    function insertImg($data)
    {
        date_default_timezone_set('UTC');        
        $date=date("Y-m-d H-i-s");
        $data['imgdate']=$date;
        $this->load->database();                      

        if($this->db->insert('img', $data)) return true;
        else return false;
       
    }

    function getImg($num=10)
    {
        $this->load->database();
        $query=$this->db->query("SELECT * FROM img ORDER BY imgid DESC LIMIT {$num}");
        $data_array=$query->result_array();
        return $data_array;
    }

    function getImgUser($numS=0,$count=1)
    {
        $this->load->database();
        $this->db->select("*");
        $this->db->from("img");
        $this->db->join("user", "img.imguid = user.uid","inner");
        // // $this->db->join("like", "imglike.likeimgid = img.imgid","outer");
        // if ($lastImgid > 0) {
        //     $this->db->where("imgid <", $lastImgid);
        // }
        $this->db->order_by("img.imgid", "DESC");
        $this->db->limit($count,$numS);
        $query = $this->db->get();
        $data_array = $query->result_array();
        return $data_array;
    }

    // 获取某用户上传的图片
    function getImgByUID($uid)
    {
        $this->load->database();
        $this->db->select("*");
        $this->db->from("img");
        $this->db->where("imguid",$uid);
        $this->db->order_by("imgid", "DESC");
        $query = $this->db->get();
        $data_array = $query->result_array();
        return $data_array;
    }

    // 插入喜欢记录
    function imgLike($imgid,$uid)
    {
        date_default_timezone_set('UTC');        
        $date=date("Y-m-d H-i-s");
        $this->load->database();
        $data=array(
            'likeimgid'=>$imgid,
            'likeuid'=>$uid,
            'likedate'=>$date);
        $this->db->insert('like', $data); 
    }

    // 获取某id图片的所有信息
    function getImgUserByImgID($imgid)
    {        
        $this->load->database();
        $this->db->select("*");
        $this->db->from("img");
        $this->db->join("user", "img.imguid = user.uid","inner");
        $this->db->where("imgid",$imgid);
        $this->db->order_by("imgid", "DESC");
        $query = $this->db->get();
        $data_array = $query->result_array();
        // print_r($data_array);
        if($data_array) return $data_array[0];
        else return false;
    }


    // 获取当前imgid下一张图片
    function getImgNextID($imgid,$imguid)
    {
        $this->load->database();
        $this->db->select("*");
        $this->db->from("img");        
        $this->db->where("imguid",$imguid);
        $this->db->where("imgid > ",$imgid);
        $this->db->limit(1);
        $this->db->order_by("imgid", "ASC");
        $query = $this->db->get();
        $data_array = $query->result_array();
        // print_r($data_array);
        if($data_array) return $data_array[0];
        else return false;
    }

    // 获取当前imgid上一张图片
    function getImgPreID($imgid,$imguid)
    {
        $this->load->database();
        $this->db->select("*");
        $this->db->from("img");        
        $this->db->where("imguid",$imguid);
        $this->db->where("imgid < ",$imgid);
        $this->db->limit(1);
        $this->db->order_by("imgid", "DESC");
        $query = $this->db->get();
        $data_array = $query->result_array();
        // print_r($data_array);
        if($data_array) return $data_array[0];
        else return false;
    }

    // 获取某一图片的所有的评论
    function getCommentByImgID($imgid)
    {
        $this->load->database();
        $this->db->select('*');
        $this->db->from('comment');
        $this->db->where('comment_imgid',$imgid);
        $this->db->order_by('comment_date',"ASC");
        $this->db->join('user', 'comment.comment_uid = user.uid');
        $query=$this->db->get();
        $data_array=$query->result_array();                
        if($data_array) return $data_array;
        else return false;
    }

    // 更新用户
    function updateImg()
    {
       
    }

    //删除用户
    function deleteImg()
    {

    }

}