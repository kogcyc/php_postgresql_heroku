<?php
	$dbh = new PDO('pgsql:dbname=dcir2s1etumpn0;user=eqaptmujihyujc;password=qt-tywWshY0yYPNpkAaClGYD5D;host=ec2-23-21-129-81.compute-1.amazonaws.com;port=5432'); 

//$sql = "CREATE TABLE IF NOT EXISTS post (
//   id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
//	title VARCHAR(40) NOT NULL,
//	content VARCHAR(2000) NOT NULL
//)";

//$sq = $dbh->query($sql);

	//$title = htmlentities($_POST['title']);
	//$content = htmlentities($_POST['content']);

	$title = "Hello!";
	$content = "Wow, that is kool!";

    $sql = "INSERT INTO post (title, content) VALUES (?, ?)"; 
    $stmt = $dbh->prepare($sql); 
    $stmt->execute(array($title, $content)); 
    $stmt->closeCursor();



?> 