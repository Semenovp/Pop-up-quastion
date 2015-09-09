<?php
	$db = new SQLite3('data/data.db');
	$db->exec("INSERT INTO users(login, password) VALUES ('admin', '123')")
?>
 