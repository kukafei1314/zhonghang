<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 企业概况管理模型层
 * 
 * @author 风格独特
 */

class About_m extends CI_Model 
{
	/**
	 * 构造函数
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	/**
	 * 获取单个文章内容
	 * 
	 * @param integer $aid
	 */
	 /*
	public function get($aid)
	{
		$aid = (int) $aid;
		$this->db->where('aid', $aid);
		$query = $this->db->get('zh_about');
		if($query->num_rows() > 0) {
			return $query->row_array();
		}
		return FALSE;
	}
	
    */

   public function get($aid)
	{
		$aid = intval($aid);
		$this->db->where('aid', $aid);
		$query = $this->db->get('zh_about');
		if($query->num_rows() != 0) {
			$row = $query->row_array();
			return array(
						'aid'		=>	$aid,
						'title'		=>	$row['title'],
						'content'	=>	$row['content'],
						'add_date'	=>	$row['add_date'],
						'add_time'	=>	$row['add_time'],
						'add_user'	=>	$row['add_user'],
					);
		}
		return FALSE;
	}



 public function title_get($title)
	{
		$this->db->where('title', $title);
		$query = $this->db->get('zh_about');
		if($query->num_rows() == 1) {
			$row = $query->row_array();
			return array(
						'title'		=>	$row['title'],
						'content'	=>	$row['content'],
						'add_date'	=>	$row['add_date'],
						'add_time'	=>	$row['add_time'],
						'add_user'	=>	$row['add_user'],
					);
		}
		return FALSE;
	}

	/**
	 * 获取文章列表，不包括文章内容字段
	 * 
	 * @param integer $num
	 * @param integer $offset
	 * @param integer $type
	 * @param string $order
	 */
	public function get_list()
	{
		$return = array();
		$this->db->order_by('aid ASC');
		$query = $this->db->get('zh_about');
		if ($query->num_rows() > 0){
			$return = $query->result_array();
		}
		return $return;
	}
	
	
	public function add($title,  $content, $add_user) 
	{
		$data = array(
					'title'		=>	$title,
					'content'	=>	$content,
					'add_date'	=>	date('Y-m-d', time()),
					'add_time'	=>	time(),
					'add_user'	=>	$add_user,
				);
		if($this->db->insert('zh_about', $data) === FALSE) {
			return FALSE;
		}
		return $this->db->insert_id();
	}
	
	/*public function edit( $aid, $title,  $content, $add_user) 
	{	
		$aid = (int) $aid;
		$data = array(
					'title'		=>	$title,
					'content'	=>	$content,
					'add_date'	=>	date('Y-m-d', time()),
					'add_time'	=>	time(),
					'add_user'	=>	$add_user,
				);
		$this->db->where('aid', $aid);
		$this->db->update('zh_about', $data);
	}
	*/

	public function edit($aid, $data) 
	{   
		$aid = (int) $aid;
		$array= array(
			   'aid'		=>	$aid,
              // 'title' => $data['title'] ,
               'content' =>$data['content'],
               'add_date' =>$data['add_date'],
		       'add_time' =>$data['add_time'],
		       'add_user' =>$data['add_user'],
            );
		//var_dump($array);
		$this->db->where('aid', $aid);
		$this->db->update('zh_about', $data);
	}
	
	public function del($aid) 
	{
		$this->db->where('aid', $aid);
		if($this->db->delete('zh_about') === FALSE) {
			return FALSE;
		}
		return TRUE;
	}
}
