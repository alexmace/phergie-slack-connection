<?php
/**
 * Phergie (http://phergie.org)
 *
 * @link http://github.com/phergie/phergie-slack-connection for the canonical source repository
 * @copyright Copyright (c) 2008-2014 Phergie Development Team (http://phergie.org)
 * @license http://phergie.org/license New BSD License
 * @package Phergie\Slack
 */

namespace Phergie\Slack;

/**
 * Canonical implementation of ConnectionInterface.
 *
 * @category Phergie
 * @package Phergie\Slack
 */
class Connection implements ConnectionInterface
{
    /**
     * Authentication Token
     *
     * @var string
     */
    protected $token;

    /**
     * User's username
     *
     * @var string
     */
    protected $username;

    /**
     * User's first name
     *
     * @var string
     */
    protected $firstName;

    /**
     * User's last name
     *
     * @var string
     */
    protected $lastName;

    /**
     * Implementation-specific connection options
     *
     * @var array
     */
    protected $options = array();

    /**
     * Constructor to accept property values.
     *
     * @param array $config Associative array keyed by property name
     */
    public function __construct(array $config = array())
    {
        foreach ($config as $key => $value) {
            $method = 'set' . $key;
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
        if (isset($config['options']) && is_array($config['options'])) {
            foreach ($config['options'] as $key => $value) {
                $this->setOption($key, $value);
            }
        }
    }

    /**
     * Implements ConnectionInterface::setToken().
     *
     * @param string $hostname
     * @see \Phergie\Slack\ConnectionInterface::setToken()
     */
    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * Implements ConnectionInterface::getToken().
     *
     * @return string
     * @see \Phergie\Slack\ConnectionInterface::getToken()
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Implements ConnectionInterface::setUsername().
     *
     * @param string $username
     * @see \Phergie\Slack\ConnectionInterface::setUsername()
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Implements ConnectionInterface::getUsername().
     *
     * @return string
     * @see \Phergie\Slack\ConnectionInterface::getUsername()
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Implements ConnectionInterface::setFirstName().
     *
     * @param string $hostname
     * @see \Phergie\Slack\ConnectionInterface::setFirstName()
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * Implements ConnectionInterface::getFirstName().
     *
     * @return string
     * @see \Phergie\Slack\ConnectionInterface::getFirstName()
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Implements ConnectionInterface::setLastName().
     *
     * @param string $lastName
     * @see \Phergie\Slack\ConnectionInterface::setLastName()
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * Implements ConnectionInterface::getServername().
     *
     * @return string
     * @see \Phergie\Slack\ConnectionInterface::getLastName()
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Implements ConnectionInterface::setOption().
     *
     * @param string $name Option name
     * @param mixed $value Option value
     */
    public function setOption($name, $value)
    {
        $this->options[$name] = $value;
    }

    /**
     * Implements ConnectionInterface::getOption().
     *
     * @param string $name Option name
     * @return mixed
     */
    public function getOption($name)
    {
        return isset($this->options[$name]) ? $this->options[$name] : null;
    }
}
