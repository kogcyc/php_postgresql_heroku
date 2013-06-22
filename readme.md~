# Using php and PostgreSQL on Heroku

It's pretty simple: an index.php file is all that is require, codewise.

Then add the PG add-on.

Here's the bash:

```bash
mkdir -appname-
cd -appname-/
cat > index.php 
git init
git add .
git commit -m "init"
heroku create -appname-
git push heroku master

heroku addons:add heroku-postgresql

```

Once the PG add-on is done, then you can issue this command:

```bash
$ heroku config
=== kogphp Config Vars
HEROKU_POSTGRESQL_GREEN_URL: postgres://<user>:<password>@<host>:5432/<dbname>

```
which will show you the database URL which includess user, password, host, port and dbname.

Be sure that the name of the URL variable returned matched that in the .php file.

In this case it is: HEROKU_POSTGRESQL_GREEN_URL

Then start processing, q u i c k l y.
