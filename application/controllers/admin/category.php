<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category extends CI_Controller{
	/**
	 *添加栏目 
	 **/
	 public function add_cate(){
	 	$this -> load -> helper('form');
	 	$this -> load -> view('admin/add_cate.html');
	 }
	 /**
	 *添加动作
	 **/
	  public function add(){
	 	$this -> load -> library('form_validation');
		$status = $this -> form_validation -> run('cate');
		if($status){
//			echo '数据库操作';
			$data = array(
				'cname' => $this -> input ->post('cname'),
			);
//			var_dump($_POST['abc']);die;
//			var_dump($this -> input ->post('cname'));die;
			$this -> load -> model('category_model','cate');
			$this -> cate -> add($data);
		}else{
			$this -> load -> helper('form');
	 		$this -> load -> view('admin/add_cate.html');
		}
	 }
	 /**
	 *编辑
	 **/
	 public function edit_cate(){
	 	$this -> load -> helper('form');
	 	$this -> load -> view('admin/edit_cate.html');
	 }
	 /**
	 *编辑动作
	 **/
	 public function edit(){
	 	$this -> load -> library('form_validation');
		$status = $this -> form_validation -> run('cate');
		if($status){
			echo '数据库操作';
		}else{
			$this -> load -> helper('form');
	 		$this -> load -> view('admin/add_cate.html');
		}
	 }
}
