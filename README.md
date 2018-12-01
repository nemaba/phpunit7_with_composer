## phpunit7_with_composer

#### Running PHPUnit 7 with composer autoloader

`Note:` This PHPUnit tests assumes that you use PHP 7.1 or PHP 7.2.

The documentation for PHPUnit 7 can be found [here](https://phpunit.readthedocs.io/).

The tutorial concerning this code can be found [here](https://nlslack.com/getting-started-with-phpunit-7-using-composer/)

## Installation and testing
Clone repo on local:  

    git clone https://github.com/nemaba/phpunit7_with_composer.git

Install the dependencies:  

    composer install

Run tests:

    ./vendor/bin/phpunit --bootstrap vendor/autoload.php --testdox tests
