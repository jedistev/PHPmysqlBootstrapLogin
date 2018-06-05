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

require'config/config.php';
require'auth.php';

?>
    <!DOCTYPE html>

    <html lang="en">

    <head>
        <?php require 'nav/meta.php'; ?>
        <?php require 'nav/css.php'; ?>
    </head>

    <body id="page-top">
        <div class="wrapper">
            <?php require 'nav/sidebar.php'; ?>
            <!-- Page Content Holder -->
            <div id="content">
                <?php require 'nav/home-nav.php'; ?>
                <?php require 'nav/upper-content.php'; ?>
            </div>
        </div>
        <div class="overlay"></div>
        <?php require 'nav/script.php'; ?>
    </body>

    </html>