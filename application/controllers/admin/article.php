<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 发表文章
 */
class Article extends CI_Controller{
	/**
	 * 发表文章模板显示
	 */
	 public function send_article(){
	 	$this -> load -> helper('form');
	 	$this -> load -> view('admin/article.html');
	 }
 	/**
	 * 发表文章动作
	 */
	 public function send(){
	 	//载入表单验证类
	 	$this -> load -> library('form_validation');
		//设置规则
//		$this -> form_validation -> set_rules('title','标题','required|min_length[5]');
//		$this -> form_validation -> set_rules('type','类型','required|integer');
//		$this -> form_validation -> set_rules('cid','栏目','integer');
//		$this -> form_validation -> set_rules('info','摘要','required|max_length[10]');
//		$this -> form_validation -> set_rules('content','内容','required|max_length[2000]');
		//执行验证
		$status = $this -> form_validation -> run('article');
		if($status){
			echo "数据库操作";
		}else{
			$this -> load -> helper('form');
	 		$this -> load -> view('admin/article.html');
		}
	 }
	 /**
	 * 编辑文章
	 */
	 public function edit_article(){
	 	$this -> load -> helper('form');
	 	$this -> load -> view('admin/edit_article.html');
	 }
	 /**
	 * 编辑动作
	 */
	 public function edit(){
	 	//载入表单验证类
	 	$this -> load -> library('form_validation');
		//执行验证
		$status = $this -> form_validation -> run('article');
		if($status){
			echo "数据库操作";
		}else{
			$this -> load -> helper('form');
	 		$this -> load -> view('admin/edit_article.html');
		}
	 }
}
