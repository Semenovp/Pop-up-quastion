<?php
session_start();

class Auth {
	public function isAuth() {
		if(isset($_SESSION['is_auth'])) {
			return $_SESSION['is_auth'];
		}
		else return false;
	}
	

} 