<?php
	require_once('DB.php');
	session_start();
class Auth {
	public function isAuth() {
		if($_SESSION['is_auth'] == true) {
			return true;
		}
		else return false;
	}
	public function checkUser($login, $password) {
		$db = DB::getDB();
		$result = $db->selectRow("SELECT * FROM users WHERE login = '$login'");
		if ($result['pass'] != $password ) {
			return false;
		} else {
			return true;
		}

	}
	public function out() {
		$_SESSION = array(); //Очищаем сессию
		session_destroy(); //Уничтожаем
	}

} 