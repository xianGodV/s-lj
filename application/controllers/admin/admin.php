<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	 * 后天默认控制器
	 */
class Admin extends CI_Controller{
	/**
	 * 默认方法
	 */
	public function index(){
		$this -> load -> view('admin/index.html');
	}

	/**
	 * 欢迎界面
	 */
	public function copy(){
		$this -> load -> view('admin/copy.html');
	}

}
