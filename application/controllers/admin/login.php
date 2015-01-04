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
			$data['email_cookie'] = $this->input->cookie('email_cookie');
			$data['password_cookie'] = $this->input->cookie('password_cookie');
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
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$usercheck = $this->input->post('usercheck');
		$remember = $this->input->post('remember');
		$rememberInt = intval($remember);
		
		$check = $_SESSION['check'];
		unset($_SESSION['check']);
		if($check != $usercheck) {
			$data['error'] = '验证码错误';
			$this->load->view('admin/login.php', $data);
		} else if($this->admin_user_m->login($email, $password) > 0) {
			redirect('d=admin&c=index');
			//redirect('admin/index');
			
			if($rememberInt){
				$this->input->set_cookie('email_cookie', $email);
				$this->input->set_cookie('password_cookie', $password);
			}
			
		} else {
			$data['error'] = '用户名或密码错误';
			$this->load->view('admin/login.php', $data);
		}
	}
	
	public function logout()
	{
		$this->admin_user_m->logout();
		redirect('d=admin&c=index');
		//redirect('admin/index');
	}
}