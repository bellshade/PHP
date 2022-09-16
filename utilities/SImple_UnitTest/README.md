# PHPUnit Installation

### Install PHPUnit

- Installation
    Download the PHPUnit package from the official website [PHPUnit](https://phpunit.de/)

    > Customize PHPUnit version

- Install PHPUnit
    ```bash
    composer require phpunit/phpunit
    ```
- Creating Example Class `WordCount.php`
- Making Test `SimpleTest.php`
- Run Test
    ```bash
    ./vendor/bin/phpunit --bootstrap vendor/autoload.php SimpleTest.php
    ```