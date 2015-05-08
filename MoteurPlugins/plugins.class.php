<?php

class plugins{
	
	protected $menus;
	protected $rights;
	
	private function getMenus(){
		return $this->menus;
	}
	
	private function getRights(){
		return $this->rights;
	}
	
	private function setMenus($table){
		$this->menus = $this->menu + $table;
	}
	
	private function setRights($table){
		$this->rights = $this->rights + $table;
	}
	
	function add_menu($name, $label){
		
	}
	
	function del_menu($name, $label){
		
	}
	
	function add_sub_menu($name, $menu, $label){
	
	}

	function del_sub_menu($name, $menu, $label){
	
	}
	
	function add_rights($profilename){
		
	}
	
	function del_rights($profilename){
		
	}
	
	function sql_query($query){
		
	}
	
}

?>