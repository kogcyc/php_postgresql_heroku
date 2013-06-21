<?php

$db = pg_connect("host='ec2-23-21-129-81.compute-1.amazonaws.com' port=5432 dbname='dcir2s1etumpn0' user='eqaptmujihyujc' password='qt-tywWshY0yYPNpkAaClGYD5D'");

$result = pg_prepare($db, "my_query", 'SELECT * FROM POST');

$result = pg_execute($db, "my_query", array(""));

echo $result;

echo "done";

?> 