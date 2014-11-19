<?php
/**
 * Created by PhpStorm.
 * User: Carole
 * Date: 18/11/2014
 * Time: 11:33
 */

require __DIR__.'/vendor/autoload.php';

/*$passwordGenerator = new \Web1\StringGenerator\PasswordGenerator();

echo \Web1\StringGenerator\PasswordGenerator::getRandomString(25, \Web1\StringGenerator\PasswordGenerator::PASSWORD_HARD);
*/
PDO::FETCH_OBJ;
echo \Web1\StringGenerator\PasswordGenerator::getRandomString(50, \Web1\StringGenerator\PasswordGenerator::PASSWORD_HARD);