phppetclinic
============

A Symfony project created on October 18, 2015, 8:53 am.

Setup
-----

Environment: https://symfony.com/doc/current/book/installation.html

git clone https://github.com/phasenraum2010/phppetclinic.git

cd phppetclinic/phppetclinic

composer install

php app/console doctrine:schema:update --force

php app/console server:run

http://localhost:8000/config.php

run
---

php app/console server:run

http://localhost:8000

Development
-----------

ORM: https://symfony.com/doc/current/book/doctrine.html

CRUD: Generating a CRUD Controller Based on a Doctrine Entity:
http://symfony.com/doc/current/bundles/SensioGeneratorBundle/commands/generate_doctrine_crud.html
Pagination: https://github.com/KnpLabs/KnpPaginatorBundle
