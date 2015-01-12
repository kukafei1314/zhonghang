<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * 功能：后台登陆控制器
 * 作者：lizzyphy
 * 日期：2014.12.29
 */
 
  /**
 * 功能完善
 * @modify lyb
 * @2014-1-3
 */
class Login extends CI_Controller 
{
	public function __construct() 
	{
		parent::__construct();
		session_start();
		$this->load->database();
		$this->load->model('admin_user_m');
		$this->load->library('captcha_np');
		$this->load->helper('form');
		$this->load->helper('cookie');
	}
	
	public function index() 
	{
		if($this->admin_user_m->check_login() === FALSE) {
			$data['error'] = '';
		//	$data['email_cookie'] = '';
		//	$data['email_cookie'] = $this->input->cookie('email_cookie');
			$ans['email'] = $this->input->cookie('email_cookie');
			$ans['token'] = $this->input->cookie('token_cookie');
			if(!empty($ans['email']) && !empty($ans['token'])){
				$username = $ans['email'];
				$token = $ans['token'];
				$res = $this->admin_user_m->token_login($username,$token);
				if ($res > 0){
					redirect('d=admin&c=index');
				}
			}
			$this->load->view('admin/login.php', $data);
		} else {
			redirect('d=admin&c=index');
			//redirect('admin/index');
		}
	}
	
	public function captcha() 
	{
		$this->captcha_np->setStyle(1);
		$this->captcha_np->setBgColor(array(0, 23, 33));
		$this->captcha_np->setFontColor(array(255, 255, 235));
		$_SESSION['check'] = $this->captcha_np->getStr();
		$this->captcha_np->display();
	}
	
	public function login_admin() 
	{
		$email = $this->input->post('username');
		$password = $this->input->post('password');
		$remember = $this->input->post('remember');
		unset($_SESSION['check']);
		$data['email_cookie'] = '';
		if($this->admin_user_m->login($email, $password) > 0) {
			if(!empty($remember)){
				$uid = $this->admin_user_m->login($email, $password);
				$tokenArray = $this->admin_user_m->edit_token($uid);
				$token = $tokenArray['token'];
				$this->input->set_cookie('email_cookie', $email, 60*60*24*100);
				$this->input->set_cookie('token_cookie', $token, 60*60*24*100);
			}
			redirect('d=admin&c=index');
		}
	}
	public function login_change_password(){
		if($this->admin_user_m->check_login() === FALSE){
			$this->load->view('admin/login.php');
		}else{
			$data['error'] ='';
			$uid = $this->admin_user_m->check_login();
			$_SESSION['uid'] = $uid;
			$this->load->view('admin/change_adminpassword.php',$data);
		}
	}
	
	public function change_password(){

		$re_password = $this->input->post('re_password');
		$re_con_password = $this->input->post('re_con_password');
		$usercheck = $this->input->post('usercheck');
		$data_password['password'] = $re_password;
		$data['error'] ='';
		$uid = $_SESSION['uid'];
		$check = $_SESSION['check'];
		unset($_SESSION['check']);
		if($check != $usercheck) {
			$data['error'] = '验证码错误';
			$this->load->view('admin/change_adminpassword.php', $data);
		}else if($re_password != $re_con_password){
			$data['error'] = '两次输入的更改密码要相同';
			$this->load->view('admin/change_adminpassword.php', $data);
		}else{
			$this->admin_user_m->edit_user($uid, $data_password);
			$this->load->view('admin/login.php', $data);
		}
	}
	public function ajax_check()
	{
		$email = $this->input->post('username');
		$password = $this->input->post('password');
		$usercheck = $this->input->post('usercheck');
		$check = $_SESSION['check'];
		if($check != $usercheck) {
			echo "1";//验证码错误
		} else if($this->admin_user_m->login($email, $password) <= 0) {
			if($this->admin_user_m->_get_userbyusername($email) == false) {
				echo "2";//用户名不存在
			} else {
				echo "3";//登录名或密码错误
			}
		}
	}
	public function logout()
	{
		$this->admin_user_m->logout();
		redirect('d=admin&c=index');
		//redirect('admin/index');
	}
}