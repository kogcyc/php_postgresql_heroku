<?php
 
	if ($db = new SQLiteDatabase('filename')) {

		$q = @$db->query('CREATE TABLE IF NOT EXISTS tablename (id int, requests int, PRIMARY KEY (id))';

	}

?>
