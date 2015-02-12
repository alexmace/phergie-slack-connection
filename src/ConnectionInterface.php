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
 * A PHP data structure for containing client connection information per the Slack Real Time Messaging API.
 *
 * @category Phergie
 * @package Phergie\Slack
 * @link https://api.slack.com/rtm
 */
interface ConnectionInterface
{

    /**
     * Sets the token to use for authentication when making the rtm.start call.
     *
     * @param string $token
     */
    public function setToken($token);

    /**
     * Returns the token for authentication..
     *
     * @return string
     */
    public function getToken();

    /**
     * Sets the user's username.
     *
     * @param string $username
     */
    public function setUsername($username);

    /**
     * Returns the user's username.
     *
     * @return string
     */
    public function getUsername();

    /**
     * Sets the user's first name.
     *
     * @param string $firstName
     */
    public function setFirstName($firstName);

    /**
     * Returns the user's first name.
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Sets the user's last name.
     *
     * @param string $lastName
     */
    public function setLastName($lastName);

    /**
     * Returns the user's last name.
     *
     * @return string
     */
    public function getLastName();

    /**
     * Sets an implementation-specific connection option.
     *
     * @param string $name Option name
     * @param mixed $value Option value
     */
    public function setOption($name, $value);

    /**
     * Returns an implementation-specific connection option.
     *
     * @param string $name Option name
     * @return mixed
     */
    public function getOption($name);
}
