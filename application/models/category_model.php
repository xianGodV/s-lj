<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Category_model extends CI_Model{
	/**
	 * 添加
	 * */
	 public function add($data){
//	 	echo '这是栏目管理模型里面的添加方法';
		$this -> db -> insert('category',$data);
	 }
}
