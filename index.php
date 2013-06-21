<?php

$db = pg_connect("host='ec2-23-21-129-81.compute-1.amazonaws.com' port=5432 dbname='dcir2s1etumpn0' user='eqaptmujihyujc' password='qt-tywWshY0yYPNpkAaClGYD5D'");

$result1 = pg_prepare($db, "q1", "CREATE TABLE posts (content text);");

$result2 = pg_execute($db, "q1");

echo $db;

echo "<br>";

echo "done";

?> 

