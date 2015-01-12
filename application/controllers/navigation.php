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
		$data['title2'] = $row['name'];
		$pid = $row['pid'];
		$row = $this->article_m->get_tid($pid);   //通过pid得到父类的名称与英文名称
        $data['title'] = $row['name'];
		$data['en_title'] = $row['en_name'];
		$row_second = $this->article_m->get_pid($pid);   //通过pid得到包含pid的所有内容，传入一级tid，即二级pid
		$data['title_second'] = $this->article_m->get_pid($pid);
		$data['tid'] = $tid;
		$data['News'] = $this->article_list_model->query_article($tid);
        $data['name'] = $this->article_type_m->get_name($tid);
		$this->load->view('second_header');
		$this->load->view('navigation_about',$data);
		$this->load->view('nav_list',$data);
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


