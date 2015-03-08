<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：后台上传图片
 * 作者：mm
 * 日期：2015.1.2
 */
class Home_pic extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
		    redirect('d=admin&c=login');
		}
		$this->load->model('upload_m');
		$this->load->model('home_pic_m');
		$this->load->library('uploader_ue', 'session');
	}
	
	public function index()
	{
	    $data['upload'] = $this->home_pic_m->home_pic_list();
	    $this->load->view('admin/home_pic',$data);
	}
	
	public function updatePic()
	{
		$pid   = $this->input->post('pid');
		$old_file_url = $this->home_pic_m->get_url($pid);
		$config = array(
				"pathFormat" => "upload/{yyyy}{mm}{dd}/{time}{ss}" ,
				"maxSize" => 50000000, //单位KB
				"allowFiles" => array( ".jpg" , ".png" , ".bmp" , ".gif" ,"tiff" )
		);
		$pic = new Uploader_ue( "pic" , $config);
		$info = $pic->getFileInfo();
		if($info['state'] == 'SUCCESS') {
			$file_url = $info['url'];
		} else {
			$file_url = $old_file_url;
		}
	    $article['order'] = $this->input->post('order');
		$article['url']   = $file_url;
	    $this->home_pic_m->update_pic($pid,$article); 
	    redirect('d=admin&c=home_pic');
	}
}