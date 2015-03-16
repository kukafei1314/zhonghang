<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 企业概况处理控制器
 * 
 * @author 风格独特
 */

class About extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
			redirect('d=admin&c=login');
		}
		$this->load->model('about_m');
		$this->load->helper('form');
	}


    public function index() 
	{
		$data['about'] = $this->about_m->get_list(); 	
		$data['username'] = $this->admin_user_m->user->username;
		$this->load->view('admin/article_list.php', $data);
	}
    
    public function add_new() 
	{
		$data['about'] = $this->about_m->get_list(); 	
		$data['username'] = $this->admin_user_m->user->username;
		$this->load->view('admin/add_news.php', $data);
	}

	public function edit_new() 
	{
        $aid = $this->input->get('aid');
		$array = $this->about_m->get($aid); 
		//var_dump($aid);
		$data['aid'] = $aid;
		$data['title'] = $array['title'];
		$data['content'] = $array['content'];
		$data['username'] = $this->admin_user_m->user->username;
		$this->load->view('admin/edit_news.php', $data);
	}


	
	public function del() 
	{
		$aid = (int) $this->input->get('aid');
		if($aid < 1) {
			redirect('d=admin&c=about&m=index');
		}
		$this->about_m->del($aid);
		redirect('d=admin&c=about&m=index');
	}
	
	public function edit() 
	{
		$aid = (int) $this->input->get('aid');
		//var_dump($aid);
		//$data['title'] = $this->input->post('title');
		$data['content'] = $this->input->post('ue_content');
        $data['add_date'] = date('Y-m-d', time());
		$data['add_time'] = time();
		$data['add_user'] = $this->admin_user_m->user->username;
		if($data['title'] === FALSE  || $data['content'] === FALSE) {
			redirect('d=admin&c=about');
		}
		$this->about_m->edit($aid, $data);
	    redirect('d=admin&c=about');
	}


	
	public function add()
	{
		$title = $this->input->post('title');
		$content = $this->input->post('ue_content');
		$this->about_m->add($title, $content, $this->admin_user_m->user->username);
		redirect('d=admin&c=about&m=index');
	}
}