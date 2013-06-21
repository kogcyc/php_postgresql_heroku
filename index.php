<?php

$db = pg_connect("host='ec2-23-21-129-81.compute-1.amazonaws.com' port=5432 dbname='dcir2s1etumpn0' user='eqaptmujihyujc' password='qt-tywWshY0yYPNpkAaClGYD5D'");

$result1 = pg_prepare($db, "q1", "SELECT table_name FROM information_schema.tables WHERE table_schema = 'public';");

$result2 = pg_execute($db, "q1");

echo $db;

echo "<br>";

echo $result1;

echo "<br>";

echo $result2;

echo "<br>";

echo "done";

?> 