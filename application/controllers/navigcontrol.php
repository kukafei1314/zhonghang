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
		$this->load->model('article_list_m');
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
		//$data['aid'] = $this->input->get('aid');
		//var_dump($data['aid']);
		//die;
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
			if($tid==2){
				$pid=2;
				$tidd=8;
				$title2="公司动态";
			}elseif($tid==3){
				$pid=3;
				$tidd=11;
				$title2="业务领域";
			}elseif($tid==5){
				$pid=5;
				$tidd=15;
				$title2="人才理念";
			}elseif($tid==7){
				$pid=7;
				$tidd=20;
				$title2="公司简介";
			}elseif($tid==6){
				$pid=0;
				$tidd=6;
				$title2="";
			}else{
				$pid=0;
				$tidd=4;
				$title2="";
			}
			
			$data['title2'] = $title2;
			$data['tid'] = $tidd;
			$this->load->view('second_header');
			$this->load->view('navigation_about',$data);
			if($pid==7){
				$tit="公司简介";
                $array = $this->about_m->title_get($tit); 
		        $data['tit'] = $array['title'];
				$data['add_date'] = $array['add_date'];
		        $data['content'] = $array['content'];
				$this->load->view('nav_content',$data);
			}
			else{
				
			    $data['pid'] = $pid;
			    $News = $this->article_list_m->query_article($pid,$tidd);
			    $data['News'] = $News;
	            $data['name'] = $this->article_type_m->get_name($tidd);
				$this->load->view('nav_list',$data);
			}
		}
		else
		{   
			$tidd=$tid;
			$tid = $row['pid'];
			$row = $this->article_m->get_tid($tid);   //通过tid得到包含tid的所有内容
            $pid=$tid;
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

            

            if($tidd==20){
				$tit="公司简介";
			}elseif($tidd==21){
				$tit="董事长致辞";
			}elseif($tidd==22){
				$tit="管理团队";
			}elseif($tidd==23){
				$tit="组织机构";
			}elseif($tidd==24){
				$tit="公司战略";
			}elseif($tidd==25){
				$tit="荣誉与奖励";
			}elseif($tidd==26){
				$tit="企业文化";
			}
            
            switch($tidd){
			case 8:$title2="公司动态";break;
			case 9:$title2="图片新闻";break;
			case 10:$title2="媒体聚焦";break;
			case 11:$title2="业务领域";break;
			case 12:$title2="水务投资项目";break;
			case 13:$title2="行业动态";break;
			case 14:$title2="业务视野";break;
			case 15:$title2="人才理念";break;
			case 16:$title2="人才现状";break;
			case 17:$title2="人才政策";break;
			case 18:$title2="招聘信息";break;
			case 19:$title2="澄清公告";break;
			case 20:$title2="公司简介";break;
			case 21:$title2="董事长致辞";break;
			case 22:$title2="管理团队";break;
			case 23:$title2="组织机构";break;
			case 24:$title2="公司战略";break;
			case 25:$title2="荣誉与奖励";break;
			case 26:$title2="企业文化";break;
			default:$title2="";break;
			}

			$data['title2'] = $title2;
            if($pid==7){
            $array = $this->about_m->title_get($tit); 
		    $data['tit'] = $array['title'];
			$data['add_date'] = $array['add_date'];
		    $data['content'] = $array['content'];
            }
			else{


			$data['tid'] = $tidd;
			$data['pid'] = $pid;
			$News = $this->article_list_m->query_article($pid,$tidd);
			$data['News'] = $News;
	        $data['name'] = $this->article_type_m->get_name($tidd);
            }
			$this->load->view('second_header');
			$this->load->view('navigation_about',$data);
			if($pid==7){
				$this->load->view('nav_content',$data);
			}
			else{
				$this->load->view('nav_list',$data);
			}
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
		//var_dump($data['aid']);
        //$data['tit'] = $this->article_type_m->get_name($data['tid']);
        //$data['types'] = $this->article_type_m->get_children();
		$article = array();
	    $article = $this->article_list_m->get_article($data['aid']);
		//var_dump($article);
		//die;
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
        //$data['add_date']='';
		
		$this->load->view('second_header');
		$this->load->view('navigation_about',$data);
		$this->load->view('nav_content',$data);
		$this->load->view('main_bottom');
		$this->load->view('footer');
	}
}


