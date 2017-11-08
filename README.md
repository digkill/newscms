<p align="center">
<<<<<<< HEAD
    <a href="http://www.yiiframework.com/" target="_blank">
        <img src="http://static.yiiframework.com/files/logo/yii.png" width="400" alt="Yii Framework" />
    </a>
</p>

Yii 2 is a modern framework designed to be a solid foundation for your PHP application.

It is fast, secure and efficient and works right out of the box pre-configured with reasonable defaults.
The framework is easy to adjust to meet your needs, because Yii has been designed to be flexible.

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2/v/stable.png)](https://packagist.org/packages/yiisoft/yii2)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2/downloads.png)](https://packagist.org/packages/yiisoft/yii2)
[![Build Status](https://img.shields.io/travis/yiisoft/yii2.svg)](http://travis-ci.org/yiisoft/yii2)
[![Code Coverage](https://scrutinizer-ci.com/g/yiisoft/yii2/badges/coverage.png?s=31d80f1036099e9d6a3e4d7738f6b000b3c3d10e)](https://scrutinizer-ci.com/g/yiisoft/yii2/)
[![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/yiisoft/yii2/badges/quality-score.png?s=b1074a1ff6d0b214d54fa5ab7abbb90fc092471d)](https://scrutinizer-ci.com/g/yiisoft/yii2/)
[![Code Climate](https://img.shields.io/codeclimate/github/yiisoft/yii2.svg)](https://codeclimate.com/github/yiisoft/yii2)

Installation
------------

- The minimum required PHP version of Yii is PHP 5.4.
- It works best with PHP 7.
- [Follow the Definitive Guide](http://www.yiiframework.com/doc-2.0/guide-start-installation.html)
in order to get step by step instructions.

Documentation
-------------

- A [Definitive Guide](http://www.yiiframework.com/doc-2.0/guide-index.html) and 
a [Class Reference](http://www.yiiframework.com/doc-2.0/index.html) cover every detail
of the framework.
- There is a [PDF version](http://stuff.cebe.cc/yii2-guide.en.pdf) of the Definitive Guide
and a [Definitive Guide Mirror](http://stuff.cebe.cc/yii2docs/) which is updated every 15 minutes.
- For Yii 1.1 users, there is [Upgrading from Yii 1.1](docs/guide/intro-upgrade-from-v1.md)
to get an idea of what has changed in 2.0.

Community
---------

- Participate in [discussions at forums](http://www.yiiframework.com/forum/).
- [Chat in IRC](http://www.yiiframework.com/chat/).
- Follow us on [Facebook](https://www.facebook.com/groups/yiitalk/), [Twitter](https://twitter.com/yiiframework)
and [GitHub](https://github.com/yiisoft/yii2).

Contributing
------------

The framework is [Open Source](LICENSE.md) powered by [an excellent community](https://github.com/yiisoft/yii2/graphs/contributors).

You may join us and:

- [Report an issue](docs/internals/report-an-issue.md)
- [Translate documentation or messages](docs/internals/translation-workflow.md)
- [Give us feedback or start a design discussion](http://www.yiiframework.com/forum/index.php/forum/42-general-discussions-for-yii-20/)
- [Contribute to the core code or fix bugs](docs/internals/git-workflow.md)

### Reporting Security issues

Please refer to a [special page at the website](http://www.yiiframework.com/security/)
describing proper workflow for security issue reports.

### Directory Structure

```
build/               internally used build tools
docs/                documentation
framework/           core framework code
tests/               tests of the core framework code
```

### Spreading the Word

Acknowledging or citing Yii 2 is as important as direct contributions.

**In presentations**

If you are giving a presentation or talk featuring work that makes use of Yii 2 and would like to acknowledge it,
we suggest using [our logo](http://www.yiiframework.com/logo/) on your title slide.

**In projects**

If you are using Yii 2 as part of an OpenSource project, a way to acknowledge it is to
[use a special badge](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat) in your README:    

![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)

If your code is hosted at GitHub, you can place the following in your README.md file to get the badge:

```
[![Yii2](https://img.shields.io/badge/Powered_by-Yii_Framework-green.svg?style=flat)](http://www.yiiframework.com/)
```
=======
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Basic Project Template</h1>
    <br>
</p>

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.

The template contains the basic features including user login/logout and a contact page.
It includes all commonly used configurations that would allow you to focus on adding new
features to your application.

[![Latest Stable Version](https://poser.pugx.org/yiisoft/yii2-app-basic/v/stable.png)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://poser.pugx.org/yiisoft/yii2-app-basic/downloads.png)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-basic.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-basic)

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
php composer.phar create-project --prefer-dist --stability=dev yiisoft/yii2-app-basic basic
~~~

Now you should be able to access the application through the following URL, assuming `basic` is the directory
directly under the Web root.

~~~
http://localhost/basic/web/
~~~

### Install from an Archive File

Extract the archive file downloaded from [yiiframework.com](http://www.yiiframework.com/download/) to
a directory named `basic` that is directly under the Web root.

Set cookie validation key in `config/web.php` file to some random secret string:

```php
'request' => [
    // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
    'cookieValidationKey' => '<secret random string goes here>',
],
```

You can then access the application through the following URL:

~~~
http://localhost/basic/web/
~~~


CONFIGURATION
-------------

### Database

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.


TESTING
-------

Tests are located in `tests` directory. They are developed with [Codeception PHP Testing Framework](http://codeception.com/).
By default there are 3 test suites:

- `unit`
- `functional`
- `acceptance`

Tests can be executed by running

```
vendor/bin/codecept run
```

The command above will execute unit and functional tests. Unit tests are testing the system components, while functional
tests are for testing user interaction. Acceptance tests are disabled by default as they require additional setup since
they perform testing in real browser. 


### Running  acceptance tests

To execute acceptance tests do the following:  

1. Rename `tests/acceptance.suite.yml.example` to `tests/acceptance.suite.yml` to enable suite configuration

2. Replace `codeception/base` package in `composer.json` with `codeception/codeception` to install full featured
   version of Codeception

3. Update dependencies with Composer 

    ```
    composer update  
    ```

4. Download [Selenium Server](http://www.seleniumhq.org/download/) and launch it:

    ```
    java -jar ~/selenium-server-standalone-x.xx.x.jar
    ```

    In case of using Selenium Server 3.0 with Firefox browser since v48 or Google Chrome since v53 you must download [GeckoDriver](https://github.com/mozilla/geckodriver/releases) or [ChromeDriver](https://sites.google.com/a/chromium.org/chromedriver/downloads) and launch Selenium with it:

    ```
    # for Firefox
    java -jar -Dwebdriver.gecko.driver=~/geckodriver ~/selenium-server-standalone-3.xx.x.jar
    
    # for Google Chrome
    java -jar -Dwebdriver.chrome.driver=~/chromedriver ~/selenium-server-standalone-3.xx.x.jar
    ``` 
    
    As an alternative way you can use already configured Docker container with older versions of Selenium and Firefox:
    
    ```
    docker run --net=host selenium/standalone-firefox:2.53.0
    ```

5. (Optional) Create `yii2_basic_tests` database and update it by applying migrations if you have them.

   ```
   tests/bin/yii migrate
   ```

   The database configuration can be found at `config/test_db.php`.


6. Start web server:

    ```
    tests/bin/yii serve
    ```

7. Now you can run all available tests

   ```
   # run all available tests
   vendor/bin/codecept run

   # run acceptance tests
   vendor/bin/codecept run acceptance

   # run only unit and functional tests
   vendor/bin/codecept run unit,functional
   ```

### Code coverage support

By default, code coverage is disabled in `codeception.yml` configuration file, you should uncomment needed rows to be able
to collect code coverage. You can run your tests and collect coverage with the following command:

```
#collect coverage for all tests
vendor/bin/codecept run -- --coverage-html --coverage-xml

#collect coverage only for unit tests
vendor/bin/codecept run unit -- --coverage-html --coverage-xml

#collect coverage for unit and functional tests
vendor/bin/codecept run functional,unit -- --coverage-html --coverage-xml
```

You can see code coverage output under the `tests/_output` directory.
>>>>>>> ebc909cef1aa3ac8ddfccc4ee1bdcd6ccead24e3
