<?php
session_start();

class Auth {
	public function isAuth() {
		if(isset($_SESSION['is_auth'])) {
			return $_SESSION['is_auth'];
		}
		else return false;
	}
	public function checkUser($login='', $password='') {
		$db = new SQLite3("C:/OpenServer/domains/popup.ru/Pop-up-quastion/admin/data/data.db");
		$result = $db->query("SELECT * FROM users ") or die ($db->lastErrorMsg());
		$db->close();
//		$row = $result->fetchArray($result);
	}

} 