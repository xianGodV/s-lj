<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/*
	 * 前台默认控制器
	 * */
class Home extends CI_Controller{
	/*
	 * 默认首页显示方法
	 * */
	public function index(){
//		echo base_url();
		$this -> load -> view('index/index.html');
	}
	/*
	 * 分类页
	 * */
	public function category(){
		$this -> load -> view('index/category.html');
	}
	/*
	 * 文章详细页面
	 * */
	public function details(){
		$this -> load -> view('index/details.html');
	}
}
