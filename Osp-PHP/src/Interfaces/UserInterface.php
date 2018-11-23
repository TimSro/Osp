<?php
/**
 * Created by PhpStorm.
 * User: Til Anheier
 * Date: 23.11.2018
 * Time: 14:15
 */

namespace App\Interfaces;

interface UserInterface
{
    /**
     * @return string
     */
    public function getUsername();

    /**
     * @return string
     */
    public function getPlainPassword();

    /**
     * @return string
     */
    public function getPassword();

    /**
     * @return string
     */
    public function getGender();

    /**
     * @return boolean
     */
    public function isTimetableAvailable();
}