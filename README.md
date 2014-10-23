Symfony Demo Project
====================

Overview
--------

This repository contains an open ended example project to be completed. There are no _correct_ answers, however
the final product should be a functional example of a simple blog website.

Instructions
------------

1. Fork this Repository .
2. Perform work as outlined in brief.
3. Amend this README.md to contain any additional instructions required to run the project, including how to run any tests.
4. Submit a pull request with your changes.

Requirements
-----------

* PHP >= 5.4 
* MySQL >= 5.5

Brief
-----

A client has provided these files with two templates: `Blog/index` and `Blog/show`.

The task is to make the website functional and dynamically display data from a MySQL database. 
You'll have to workout the required entities and their properties based upon the data in the templates.

It is suggested you use **Doctrine Migrations** and **Doctrine Fixtures** (possibly using [Faker](https://github.com/fzaninotto/Faker)) in order to create the database schema and populate the site
with dummy content.  The schmea of the database is entirely up to yourself, providing the functionality
hinted at within the templates is implemented.

The application will require at least 3 routes:

* **/**: To display `Blog:index.html.twig` with dynamic data
* **/post/{blog post identitifer}**: To display a single blog post using the `Blog:show.html.twig` template
* **/tag/{tag indentifier}**: To display all blog posts which are assigned a certain tag.

There may also be a few errors within the website which you'll need to fix.

All code should be written to adhere to the PSR-2 standards as well as use PHP features available within
PHP 5.5.

If there are any tests you feel should be implemented then feel free to do so.

An administrative area will **not** be necessary.