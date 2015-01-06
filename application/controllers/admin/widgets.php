<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：动态要闻
 * 作者：LZZ
 * 日期：2015.1.2
 */
class Widgets extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
		    redirect('d=admin&c=index');
		}
		$this->load->model('article_list_m');
		$this->load->model('article_type_m');
	}
	
	public function index() 
	{
//		$this->load->view('admin/article_list');
	}
	
	public function  industryNews()
	{
	    $pid = $_GET['pid'];
	    $tid = $_GET['tid'];
	    $data['username'] = $this->admin_user_m->user->username;
	    $News = $this->article_list_m->query_article($pid,$tid);
	    $data['News'] = $News;
	    $data['pid'] = $pid;
	    $data['tid'] = $tid;
	    $this->load->view('admin/article_list_of_sec',$data);
	}
	
	public function addNews()
	{
	    $data['types'] = $this->article_type_m->list_type();
	    $data['username'] = $this->admin_user_m->user->username;
	    $this->load->view('admin/add_news',$data);
	}
	
	public function deleteNews()
	{
	    $aid = $_GET['aid'];
	    $this->article_list_m->delete_article($aid);
	}
	
	public function insertNews()
	{
	    $article['title'] = $_POST['title'];
	    $article['type'] = $_POST['type'];
	    $article['content'] = $_POST['content'];
	    $article['username'] = $this->admin_user_m->user->username;
	    $article['add_time'] = date("Y/m/d");
	    $this->article_list_m->add_article($article);
	    
	}
}