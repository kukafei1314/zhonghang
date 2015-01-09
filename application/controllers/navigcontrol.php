<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Navigcontrol extends CI_Controller 
{	
	/**
	 * 构造函数
	 */
	public function __construct() 
	{
		parent::__construct();
		$this->load->model('article_m');
		$this->load->model('about_m');
	}

	/**
	 * 首页
*/
	public function index() 
	{
		$tid = (int) $this->input->get('tid');
		$row = $this->article_m->get_tid($tid);
		$data['title'] = $row['name'];
		$data['en_title'] = $row['en_name'];
		$row_second = $this -> article_m->get_pid($tid);
		$array_secondtitle = array();
		if(!empty($row_second)){
			foreach ($row_second as $row_second_name){
				$array_secondtitle[] = $row_second_name['name'];
			}
			$data['title_second'] = $array_secondtitle;
		}
		$this->load->view('second_header');
		$this->load->view('navigation_about',$data);
		$this->load->view('nav_content');
		$this->load->view('main_bottom');
		$this->load->view('footer');
	
		
    }
}