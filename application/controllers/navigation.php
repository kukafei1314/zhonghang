<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navigation extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('article_m');
		$this->load->model('about_m');
		$this->load->model('article_list_model');
		$this->load->model('article_type_m');
		$this->load->helper('url');
	}

	/**
	 * 首页
*/
	public function index() 
	{
		$tid = (int) $this->input->get('tid');
		$row = $this->article_m->get_tid($tid);   //通过tid得到包含tid的所有内容
		$data['en_title'] = $row['en_name'];
		if($row['pid'] == 0){
			$pid=5;
			$tidd=15;
			$title2="人才理念";
			$data['title'] = "人力资源";
			$data['title2'] = $title2;
			$this->load->view('second_header');
			$this->load->view('navigation',$data);
			$data['tid'] = $tidd;
			$data['pid'] = $pid;
		    $News = $this->article_list_model->query_article($pid,$tidd);
			$data['News'] = $News;
	        $data['name'] = $this->article_type_m->get_name($tidd);
		    $this->load->view('nav_list',$data);
		}
		else
		{   
			$tidd=$tid;
			$tid = $row['pid'];
            $pid=$tid; 
            switch($tidd){
			case 15:$title2="人才理念";break;
			case 16:$title2="人才现状";break;
			case 17:$title2="人才政策";break;
			case 18:$title2="招聘信息";break;
			case 19:$title2="澄清公告";break;
			default:$title2="";break;
			}
            $data['title'] = "人力资源";
			$data['title2'] = $title2;
			$data['tid'] = $tidd;
			$data['pid'] = $pid;
			$News = $this->article_list_model->query_article($pid,$tidd);
			$data['News'] = $News;
	        $data['name'] = $this->article_type_m->get_name($tidd);
			$this->load->view('second_header');
			$this->load->view('navigation',$data);
			$this->load->view('nav_list',$data);
		}  
			$this->load->view('main_bottom');
			$this->load->view('footer');

    }

	public function news()
	{
	    $data['pid'] = (int) $this->input->get('pid');
	    $tid=(int) $this->input->get('tid');
		$data['tid'] = $tid;
	    $data['aid'] = (int) $this->input->get('aid');
		$article = array();
	    $article = $this->article_list_model->get_article($data['aid']);
		$data['tit'] = $article['title'];
		$data['content'] = $article['content'];
		$data['add_date'] = $article['add_time'];

		$row = $this->article_m->get_tid($tid);
		$data['title'] = $row['name'];
		$data['en_title'] = $row['en_name'];
		$row_second = $this -> article_m->get_pid($tid);   //通过pid得到包含pid的所有内容，传入一级tid，即二级pid
		$array_secondtitle = array();
			if(!empty($row_second)){
				foreach ($row_second as $row_second_name){
					$array_secondtitle[] = $row_second_name['name'];
				}
				$data['title_second'] = $array_secondtitle;
			}
	    
	    
	    $data['title2']='';
		$this->load->view('second_header');
		$this->load->view('navigation',$data);
		$this->load->view('nav_content',$data);
		$this->load->view('main_bottom');
		$this->load->view('footer');
	}
}


