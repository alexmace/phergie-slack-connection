<?php
/**
 * Phergie (http://phergie.org)
 *
 * @link http://github.com/phergie/phergie-slack-connection for the canonical source repository
 * @copyright Copyright (c) 2008-2014 Phergie Development Team (http://phergie.org)
 * @license http://phergie.org/license New BSD License
 * @package Phergie\Slack
 */

namespace Phergie\Slack\Tests;

use Phergie\Slack\Connection;

/**
 * Tests for \Phergie\Slack\Connection.
 *
 * @category Phergie
 * @package Phergie\Slack
 */
class ConnectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Instance of the class being tested
     *
     * @var \Phergie\Slack\Connection
     */
    protected $connection;

    /**
     * Instantiates the class being tested.
     */
    protected function setUp()
    {
        $this->connection = new Connection;
    }

    /**
     * Tests configuration via the constructor.
     */
    public function testConstructor()
    {

        $token = 'xoxb-##########';
        $username = 'username';
        $firstName = 'firstName';
        $lastName = 'lastName';
        $options = array('foo' => 'bar');

        $connection = new Connection(array(
            'token' => $token,
            'username' => $username,
            'firstName' => $firstName,
            'lastName' => $lastName,
            'options' => $options,
        ));

        $this->assertSame($token, $connection->getToken());
        $this->assertSame($username, $connection->getUsername());
        $this->assertSame($firstName, $connection->getFirstName());
        $this->assertSame($lastName, $connection->getLastName());
        $this->assertSame($options['foo'], $connection->getOption('foo'));
    }

    /**
     * Tests setToken().
     */
    public function testSetToken()
    {
        $this->connection->setToken('xoxb-##########');
        $this->assertSame('xoxb-##########', $this->connection->getToken());
    }

    /**
     * Tests getToken().
     */
    public function testGetToken()
    {
        $this->assertNull($this->connection->getToken());
    }

    /**
     * Tests setUsername().
     */
    public function testSetUsername()
    {
        $this->connection->setUsername('username');
        $this->assertSame('username', $this->connection->getUsername());
    }

    /**
     * Tests getUsername().
     */
    public function testGetUsername()
    {
        $this->assertNull($this->connection->getUsername());
    }    

    /**
     * Tests setFirstName().
     */
    public function testSetFirstName()
    {
        $this->connection->setFirstName('firstName');
        $this->assertSame('firstName', $this->connection->getFirstName());
    }

    /**
     * Tests getFirstName().
     */
    public function testGetFirstName()
    {
        $this->assertNull($this->connection->getFirstName());
    }

    /**
     * Tests setLastName().
     */
    public function testSetLastName()
    {
        $this->connection->setLastName('lastName');
        $this->assertSame('lastName', $this->connection->getLastName());
    }

    /**
     * Tests getLastName().
     */
    public function testGetLastName()
    {
        $this->assertNull($this->connection->getLastName());
    }

    /**
     * Tests setOption().
     */
    public function testSetOption()
    {
        $this->connection->setOption('foo', 'bar');
        $this->assertSame('bar', $this->connection->getOption('foo'));

        $this->connection->setOption('foo', 'baz');
        $this->assertSame('baz', $this->connection->getOption('foo'));

        $this->connection->setOption('bar', 'bay');
        $this->assertSame('bay', $this->connection->getOption('bar'));
    }

    /**
     * Tests getOption().
     */
    public function testGetOption()
    {
        $this->assertNull($this->connection->getOption('foo'));
        $this->assertNull($this->connection->getOption('bar'));
    }
}
