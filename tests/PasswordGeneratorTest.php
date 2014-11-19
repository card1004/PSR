<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 19/11/2014
 * Time: 17:49
 */

namespace Tests\Web1\StringGenerator;

use Web1\StringGenerator\PasswordGenerator;

/**
 * Class PasswordGeneratorTest
 * @package Tests\Web1\StringGenerator
 */
class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if
     *
     * @throws \Exception
     */
    public function testGetRandomStringLengthEasy()
    {
        $length     = mt_rand(1, 10000);
        $password   = PasswordGenerator::getRandomString($length, PasswordGenerator::PASSWORD_EASY);

        $this->assertEquals($length, mb_strlen($password));
    }

    /**
     * Test if
     *
     * @throws \Exception
     */
    public function testGetRandomStringLengthMedium()
    {
        $length     = mt_rand(1, 10000);
        $password   = PasswordGenerator::getRandomString($length, PasswordGenerator::PASSWORD_MEDIUM);

        $this->assertEquals($length, mb_strlen($password));
    }

    /**
     * Test if
     *
     * @throws \Exception
     */
    public function testGetRandomStringLengthHard()
    {
        $length     = mt_rand(1, 10000);
        $password   = PasswordGenerator::getRandomString($length, PasswordGenerator::PASSWORD_HARD);

        $this->assertEquals($length, mb_strlen($password));
    }

    /**
     * Test if
     *
     * @throws \Exception
     */
    public function testGetRandomStringNotNull()
    {
        $password = PasswordGenerator::getRandomString(0);

        $this->assertNotEmpty($password);
    }
}