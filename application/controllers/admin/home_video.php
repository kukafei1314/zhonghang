<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：后台上传视频
 * 作者：lizzy
 * 日期：2015.5.11
 */
class Home_video extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
		    redirect('d=admin&c=login');
		}
		$this->load->model('upload_m');
		$this->load->model('home_video_m');
		$this->load->library('uploader_ue', 'session');
	}
	
	public function index()
	{
	    $data['upload'] = $this->home_video_m->home_video_list();
	    $this->load->view('admin/home_video',$data);
	}
	
	public function updateVideo()
	{
		$id = $this->input->post('id');
	    $article['video_address'] = $this->input->post('address');
	    $this->home_video_m->update_video($id,$article); 
	    redirect('d=admin&c=home_video');
	}
}