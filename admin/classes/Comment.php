<?php

class Comment {
	public function getCommentsList(){
		$db = DB::getDB();
		$result = $db->select('SELECT * FROM comments WHERE status = 0');
		return $result;
	}
	public function deleteComment($id) {
		$db = DB::getDB();
		$delete = $db->query("DELETE FROM comments WHERE ID = '$id'");
	}
	public function loadComment($id) {
		$db = DB::getDB();
		$load = $db->selectRow("SELECT * FROM comments WHERE ID = '$id'");
		return $load;
	}
	public function editComment($id,$content,$tag,$note) {
		$db = DB::getDB();
		$edit = $db->query("UPDATE comments SET content = '$content', tagn = '$tag', note = '$note' WHERE ID = '$id'");
	}
	public function createComment($data) {
		$db = DB::getDB();
		$insert = $db->query("INSERT INTO comments (content,tagn,note,status) VALUES('$data','-','-',0)");
	}
} 