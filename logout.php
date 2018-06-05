<?php
/**
 * For PHP Bootstrap login.
 * 
 * PHP version: 7.1.9
 *
 * Create a Sample of Bootstrap login for localhost 
 * pratice to learn how to use login. 
 * it not recomment to use online as security flaw on md5
 * require auth.php file on all secure pages
 *
 * @category  PHP
 * @package   Bootstrap_Login_PHP
 * @author    Steven Smith <jedistev@gmail.com>
 * @copyright 2018 nah ltd 
 * @license   https://github.com/jedistev/PHPmysqlBootstrapLogin/blob/master/LICENSE 
 * License
 * @link      https://github.com/jedistev/PHPmysqlBootstrapLogin
 */
session_start();
// Destroying All Sessions
if(session_destroy())
{
// Redirecting To Home Page
header("Location: login.php");
}
?>