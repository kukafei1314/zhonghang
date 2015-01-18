<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：后台二级标题
 * 作者：LZZ
 * 日期：2015.1.2
 */
class Upload_file extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
		    redirect('d=admin&c=login');
		}
		$this->load->model('upload_m');
		$this->load->model('article_type_m');
		$this->load->library('session');
		$this->load->helper('page_helper');
		$this->load->library('uploader_ue', 'session');
	}
	
	public function listFile()
	{
	    $p = page_cur();
	    $per_page = 10;
	    $data['upload'] = $this->upload_m->upload_list($per_page,($p - 1) * $per_page);
	    $data['page_html'] = page($this->upload_m->count_all());
	    $this->load->view('admin/upload_list',$data);
	}
	
	public function deleteFile()
	{
	    $uid = $_GET['uid'];
	    $this->upload_m->delete_file($uid);
	    redirect('d=admin&c=upload_file&m=listFile');
	}
	
	public function insertFiles()
	{
		$config = array(
				"pathFormat" => "upload/{yyyy}{mm}{dd}/{time}{ss}" ,
				"maxSize" => 50000000, //单位KB
				"allowFiles" => array( ".txt" , ".doc" , ".pdf" , ".zip" )
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
	    $this->upload_m->add_file($article); 
	    redirect('d=admin&c=upload_file&m=listFile');
	}
}