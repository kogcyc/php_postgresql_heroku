<?php

$db = pg_connect("host='ec2-23-21-129-81.compute-1.amazonaws.com' port=5432 dbname='dcir2s1etumpn0' user='eqaptmujihyujc' password='qt-tywWshY0yYPNpkAaClGYD5D'");

//$query = 'CREATE TABLE posts (content text);';
$query = "DELETE FROM posts;";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

$query = "INSERT INTO posts (content) VALUES ('hello');";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

for ($i=1; $i<=2; $i++)
  {
  $result = pg_query($query) or die('Query failed: ' . pg_last_error());
  }

$query = "SELECT * FROM posts;";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($db);

$url=parse_url(getenv("DATABASE_URL"));

$host = $url["host"];
$port = $url["port"];
$user = $url["user"];
$password = $url["pass"];
$db = substr($url["path"],1);

echo $user;
echo $password;
echo $host;
echo $port; 
echo $db;

echo getenv("DATABASE_URL");

?> 