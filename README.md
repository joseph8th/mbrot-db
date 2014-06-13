Mandelbrot DB Explorer
======================

A simple CodeIgniter app to view and visualize Mandelbrot Set data (SQLite DBs) downloaded from [fractals.dwscript.net](http://fractals.dwscript.net/).

Uses PHP GD to dynamically generate black and white images of the 'tile' data stored in each 'level'. Originally started as a simple CodeIgniter demo, but I decided to go ahead and do something more interesting with it, so here you go!

Requirements
------------

Due to the size of the files, I didn't include the SQLite database files in this repository, so there's a couple things to do if you want to try it.

1. Configure your Apache2 webserver to enable `pdo_sqlite`.
2. Change the `base_url` setting in `application/config/config.php` to your chosen URL.
3. Make sure `GD` graphics library is working with your PHP5.
2. [Download](http://fractals.dwscript.net/documentation.dws) a few of the `dataL?.sql3` files into `application/db` directory. (The app will determine which ones it can display automatically.)
   a. Set all write permissions on the `db` directory and its contents, i.e., `chmod -R a+w db`
   b. Change the owner *and* group of all the `dataL?.sql3` files to `root`.