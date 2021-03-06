# ToDoList

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/b80f4876ec6c4eb4883e6820f3736191)](https://www.codacy.com/app/zohac/ToDoList?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=zohac/ToDoList&amp;utm_campaign=Badge_Grade)
[![Codacy Badge](https://api.codacy.com/project/badge/Coverage/b80f4876ec6c4eb4883e6820f3736191)](https://www.codacy.com/app/zohac/ToDoList?utm_source=github.com&utm_medium=referral&utm_content=zohac/ToDoList&utm_campaign=Badge_Coverage)
[![Build Status](https://travis-ci.org/zohac/ToDoList.svg?branch=develop)](https://travis-ci.org/zohac/ToDoList)
[![Maintainability](https://api.codeclimate.com/v1/badges/b2597a83564371a9358b/maintainability)](https://codeclimate.com/github/zohac/ToDoList/maintainability)

---

## About

An application to manage daily tasks.
Project 8 of the OpenClassrooms "Application Developer - PHP / Symfony" course.

## Requirements

+ PHP: ToDoList requires PHP version 7.1 or greater. [![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%207.1-8892BF.svg?style=flat-square)](https://php.net/)
+ MySQL: for the database. [![Minimum MySQL Version](https://img.shields.io/badge/MySQL-%3E%3D5.7-blue.svg?style=flat-square)](https://www.mysql.com/fr/downloads/)
+ Composer: to install the dependencies. [![Minimum Composer Version](https://img.shields.io/badge/Composer-%3E%3D1.6-red.svg?style=flat-square)](https://getcomposer.org/download/)

## Installation

### Git Clone

You can also download the bilemo source directly from the Git clone:

```bash
git clone https://github.com/zohac/bilemo.git todolist
cd todolist
```

Give write access to the /var directory

```bash
chmod 777 -R var
```

Then

```bash
composer install
```

Configure the application by completing the file /app/config/parameters.yml

```bash
php bin/console doctrine:schema:update --dump-sql
php bin/console doctrine:schema:update --force
```

If you want to use a data set

```bash
php bin/console doctrine:fixtures:load
```

## Tests

You can start the tests with the following command:

```bash
./vendor/bin/simple-phpunit --coverage-html web/test-coverage
```

## Issues

Bug reports and feature requests can be submitted on the [Github Issue Tracker](https://github.com/zohac/ToDoList/issues)

## Author

Simon JOUAN
[https://jouan.ovh](https://jouan.ovh)
