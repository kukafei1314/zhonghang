<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：后台上传附件
 * 作者：mm
 * 日期：2015.1.18
 */
class Upload_file extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model(array('admin_user_m','statistics_m','upload_m','article_type_m'));
		if($this->admin_user_m->check_login() === FALSE) {
		    redirect('d=admin&c=login');
		}
		$this->load->helper('page_helper');
		$this->load->library('uploader_ue', 'session');
	}
	
	public function listFile()
	{
	    $p = page_cur();
	    $per_page = 10;
		$tid = $this->input->get('tid');
	    $data['upload'] = $this->upload_m->upload_list($per_page,($p - 1) * $per_page, $tid);
	    $data['page_html'] = page($this->upload_m->count_all());
		$data['tid'] = $tid;
		$data['type_name'] = $this->article_type_m->get_name($tid);
	    $this->load->view('admin/upload_list',$data);
	}
	
	public function deleteFile()
	{
	    $uid = $_GET['uid'];
		$tid = $_GET['tid'];
	    $this->upload_m->delete_file($uid);
		$this->statistics_m->del_byaid($uid);
	    redirect('d=admin&c=upload_file&m=listFile&tid='.$tid);
	}
	
	public function insertFiles()
	{
		$config = array(
				"pathFormat" => "upload/{yyyy}{mm}{dd}/{time}{ss}" ,
				"maxSize" => 50000000, //单位KB
				"allowFiles" => array( ".txt" , ".doc" , ".docx", ".xlsx" ,".xls", ".pdf" , ".zip")
		);
		$pic = new Uploader_ue( "pic" , $config);
		$info = $pic->getFileInfo();
		if($info['state'] == 'SUCCESS') {
			$file_url = $info['url'];
		} else {
			$file_url = '';
		}
		$article['title']    = $info['title'];
	    $article['username'] = $this->admin_user_m->user->username;
	    $article['add_time'] = time();
		$article['url']      = $file_url;
		$article['tid']      = $this->input->post('type_id');
	    $this->upload_m->add_file($article); 
	    redirect('d=admin&c=upload_file&m=listFile&tid='.$article['tid']);
	}
}