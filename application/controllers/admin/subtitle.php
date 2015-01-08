<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：动态要闻
 * 作者：LZZ
 * 日期：2015.1.2
 */
class Subtitle extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('admin_user_m');
		if($this->admin_user_m->check_login() === FALSE) {
		    redirect('d=admin&c=login');
		}
		$this->load->model('article_list_m');
		$this->load->model('article_type_m');
	}
	
	public function index() 
	{
//		$this->load->view('admin/article_list');
	}
	
	public function  listNews()
	{
	    $pid = $_GET['pid'];
	    $tid = $_GET['tid'];
	    $data['username'] = $this->admin_user_m->user->username;
	    $News = $this->article_list_m->query_article($pid,$tid);
	    $data['name'] = $this->article_type_m->get_name($tid);
	    $data['News'] = $News;
	    $data['pid'] = $pid;
	    $data['tid'] = $tid;
	    $this->load->view('admin/article_list_of_sec',$data);
	}
	
	public function addNews()
	{
	    $data['pid'] = $_GET['pid'];
	    $data['tid'] = $_GET['tid'];
	    $data['name'] = $this->article_type_m->get_name($data['tid']);
	    $data['username'] = $this->admin_user_m->user->username;
	    $this->load->view('admin/add_news_of_sec',$data);
	}
	
	public function editNews()
	{
	    $data['username'] = $this->admin_user_m->user->username;
	    $data['pid'] = $_GET['pid'];
	    $data['tid'] = $_GET['tid'];
	    $data['aid'] = $_GET['aid'];
	    $data['name'] = $this->article_type_m->get_name($data['tid']);
	    $data['types'] = $this->article_type_m->get_children();
	    $data['article'] = $this->article_list_m->get_article($data['aid']);
	    $this->load->view('admin/edit_news_of_sec',$data);
	}
	
	public function deleteNews()
	{
	    $pid = $_GET['pid'];
	    $tid = $_GET['tid'];
	    $aid = $_GET['aid'];
	    $this->article_list_m->delete_article($aid);
	    Header("Location:listNews?pid=".$pid."&tid=".$tid);
	}
	
	public function insertNews()
	{
	    $pid = $_GET['pid'];
	    $tid = $_GET['tid'];
	    $article['title'] = $_POST['title'];
	    $article['type'] = $_POST['type'];
	    $article['content'] = "";
	    if(isset($_POST['ue_content']))
	    {
	        $article['content'] = $_POST['ue_content'];
	    }
	    $article['username'] = $this->admin_user_m->user->username;
	    $article['add_time'] = date("Y/m/d");
	    $this->article_list_m->add_article($article); 
	    Header("Location:listNews?pid=".$pid."&tid=".$tid);
	}
	
	public function updateNews()
	{
	    $pid = $_GET['pid'];
	    $tid = $_GET['tid'];
	    $article['aid'] = $_GET['aid'];
	    $article['title'] = $_POST['title'];
	    $article['type'] = $_POST['type'];
	    $article['content'] = $_POST['ue_content'];
	    $article['username'] = $this->admin_user_m->user->username;
	    $article['add_time'] = date("Y/m/d");
	    $this->article_list_m->update_article($article);
	    Header("Location:listNews?pid=".$pid."&tid=".$tid);
	}
}