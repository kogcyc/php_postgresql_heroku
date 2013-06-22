<?php

//create a connection string from the PG database URl and then use it to connect

$url=parse_url(getenv("HEROKU_POSTGRESQL_GREEN_URL"));

$host = $url["host"];
$port = $url["port"];
$user = $url["user"];
$password = $url["pass"];
$dbname = substr($url["path"],1);

$connect_string = "host='" . $host . "' ";
$connect_string = $connect_string . "port=" . $port . " ";
$connect_string = $connect_string . "user='" . $user . "' ";
$connect_string = $connect_string . "password='" . $password . "' ";
$connect_string = $connect_string . "dbname='" . $dbname . "' ";

$db = pg_connect($connect_string);

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

?> 