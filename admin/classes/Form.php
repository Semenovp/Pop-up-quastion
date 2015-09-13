<?php


class Form {
	public function getForm() {
		$db = DB::getDB();
		$load = $db->selectRow("SELECT * FROM form WHERE ID = '0'");
		return $load;
	}
	public function editForm($data){
		$db = DB::getDB();
		$edit = $db->query("UPDATE form SET content='$data'WHERE ID='0'");
	}
}