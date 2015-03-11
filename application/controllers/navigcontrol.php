<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navigcontrol extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model(array('article_m','about_m','article_list_model','article_type_m','upload_m','statistics_m'));
		$this->load->helper('url');
	}

	/**
	 * 列表页面
	*/
	public function index()
	{
		$per_page		  =	10;
		$p				  =	(int) page_cur();	// 获取当前页码
		$data['p']        = $p;
		$tid = (int) $this->input->get('tid');
		$row = $this->article_m->get_tid($tid);   //通过tid得到包含tid的所有内容  
		$data['title2'] = $row['name'];
		$pid = $row['pid'];
		if($pid != 0) {
			$data['title_second'] = $this->article_m->get_pid($pid);
			$row = $this->article_m->get_tid($pid);   //通过pid得到父类的名称与英文名称
		} else {
			$data['title_second'] = array();
		}
		$data['title'] = $row['name'];
		$data['en_title'] = $row['en_name'];
		$data['tid'] = $tid;
		$data['pid'] = $pid;
		if($pid == 6) {
			$data['News']      = $this->upload_m->upload_list($per_page,($p - 1) * $per_page,$tid);
			$data['page_html'] = page($this->upload_m->count_all());
		} else {
			$data['News']      = $this->article_list_model->query_article($tid,$per_page,$per_page*($p-1));
			$data['page_html'] =	page($this->article_list_model->query_article_num($tid), $per_page);
		}
		$this->load->view('second_header');
		if($pid == 5) {
			$this->load->view('navigation');
		} else {
			$this->load->view('navigation_about',$data);
		}
		if ($tid == 18) {
			$this->load->view('job_list',$data);   //招聘信息列表
		} else if ($tid == 15 || $tid == 16 || $tid == 17){
			$array= $this->article_list_model->get($tid);
			$data['content']  =  $array['content'];
			$this->load->view('nav_content_about',$data);
		}  else {
			$this->load->view('nav_list',$data);
		}
		$this->load->view('main_bottom');
		$this->load->view('footer');
    }
	/*
	 * 详情页面
	 */
	public function news()
	{
	    $tid = (int)$this->input->get('tid');
	    $aid = (int)$this->input->get('aid');
		$this->statistics_m->update_click($tid,$aid);
	    $data['article'] = $this->article_list_model->get_article($aid);
	    $row = $this->article_m->get_tid($tid);   //通过tid得到包含tid的所有内容
	    $pid = $row['pid'];
	    $data['title2'] = $row['name'];
	    if($pid != 0) {
	    	$data['title_second'] = $this->article_m->get_pid($pid);
	    	$row = $this->article_m->get_tid($pid);   //通过pid得到父类的名称与英文名称
	    } else {
	    	$data['title_second'] = array();
	    }
	    $data['title'] = $row['name'];
	    $data['en_title'] = $row['en_name'];
		$this->load->view('second_header');
		if($pid == 5) {
			$this->load->view('navigation');
		} else {
			$this->load->view('navigation_about',$data);
		}
		if ($tid == 18) {
			$this->load->view('job_content',$data);   //招聘信息列表
		} else {
			$this->load->view('nav_content',$data);
		}
		
		$this->load->view('main_bottom');
		$this->load->view('footer');
	}
	/*
	 * 搜索页面
	 */
	public function search()
	{
		$per_page  = 20;
		$p	       = (int) page_cur();	// 获取当前页码
		$data['p'] = $p;
		$keyword   = $this->input->get('keyword');
		$data['News'] = $this->article_m->search($keyword,$per_page,$per_page*($p-1));
		$data['page_html'] = page($this->article_m->count_all($keyword), $per_page);
		$data['keyword'] = $keyword;
		$this->load->view('search_result',$data);	
	}
	/*
	* 统计下载量
	*/
	public function upload_count()
	{
		$uid = $this->input->post('uid');
		$tid = $this->input->post('tid');
		$this->statistics_m->update_click($tid,$uid);
		echo 1;
	}
}


