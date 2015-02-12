# phergie/phergie-slack-connection

A PHP data structure for containing client connection information per the Slack Real Time Messaging API.

Primarily used by Slack client implementations of the Phergie project.

[![Build Status](https://secure.travis-ci.org/alexmace/phergie-slack-connection.png?branch=master)](http://travis-ci.org/alexmace/phergie-slack-connection)

## Install

The recommended method of installation is [through composer](http://getcomposer.org).

```JSON
{
    "minimum-stability": "dev",
    "require": {
        "phergie/phergie-slack-connection": "1.1.0"
    }
}
```

## Design goals

* Minimal dependencies: PHP 5.3.3+
* Simple easy-to-understand API

## Usage

```php
$connection = new \Phergie\Slack\Connection();

$connection->setToken('xoxb-##########');
$connection->setUsername('username');
$connection->setFirstName('hostname');
$connection->setLastName('servername');
$connection->setOption('option', 'value');

echo $connection->getToken();
echo $connection->getUsername();
echo $connection->getFirstName();
echo $connection->getLastName();
echo $connection->getOption('option');
```

## Tests

To run the unit test suite:

```
curl -s https://getcomposer.org/installer | php
php composer.phar install
./vendor/bin/phpunit
```

## License

Released under the BSD License. See `LICENSE`.

## Community

Check out #phergie on irc.freenode.net.
