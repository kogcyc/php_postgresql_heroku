# Using php and PostgreSQL on Heroku

If the file <b><i>index.php</i></b> exists in a git push to Heroku, Heroku will set up a php environment in which it will be run.

If you want your php script to have access to a database on Heroku, you have to make accomodations for using PostgreSQL, Heroku's standard relational database.

The <b><i>index.php</i></b> included in this repo is designed to make php->PostgreSQL->Heroku easy.

Here's an outline of what you need to do:

<p>1) create a Heroku application</p>
<p>2) add PostgreSQL on to that Heroku application</p>
<p>3) create an <b><i>index.php</i></b> file</p>
<p>4) find the Heroku database URL associated with the Heroku application</p>
<p>5) modify the <b><i>index.php</i></b> file so that the database URL is correct</p>
<p>6) push the application code to Heroku and run it</p>

Let' go through steps one by one:

1) create a Heroku application
```bash
mkdir -appname-
cd -appname-/
heroku create -appname-

```

2) add PostgreSQL on to that Heroku application
```bash
heroku addons:add heroku-postgresql --app -appname-

```

3) create an <b><i>index.php</i></b> file
```php
<?php

  //create a connection string from the PG database URL and then use it to connect
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
  
  pg_close($db);

?> 
```

4) find the Heroku database URL associated with the Heroku application

Run this command:
```bash
heroku config --app -appname-

```
and look at the URL that is returned, it will look something like this:

  HEROKU_POSTGRESQL_PINK_URL: postgres://isdibegrtdvfww...

In this case the URL is named using the color: <b><i>PINK</i></b>

5) modify the <b><i>index.php</i></b> file so that the database URL is correct

Edit the <b><i>index.php</i></b> to make the color in the php script match the color of the database URL.
In this case change <b><i>GREEN</i></b> to <b><i>PINK</i></b>.

6) push the application code to Heroku and run it
```bash
git init
git add .
git commit -m "init"
git push heroku master
```
