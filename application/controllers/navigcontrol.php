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
		$this->load->helper('url');
	}

	/**
	 * 首页
*/
	public function index() 
	{
		$tid = (int) $this->input->get('tid');
		$row = $this->article_m->get_tid($tid);   //通过tid得到包含tid的所有内容
		if($row['pid'] == 0){
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
			$this->load->view('second_header');
			$this->load->view('navigation_about',$data);
		}
		else
		{
			$tid = $row['pid'];
			redirect('/navigcontrol/?tid='.$tid, 'refresh');
		}
			$this->load->view('nav_content');
			$this->load->view('main_bottom');
			$this->load->view('footer');
    }
}


