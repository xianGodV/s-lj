<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	 * 后台登陆控制器
	 */
class Login extends CI_Controller{
	/**
	 * 默认方法
	 */

	public function index(){
		$this -> load -> view('admin/login.html');
	}

}
