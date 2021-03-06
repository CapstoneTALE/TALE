<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */



/////CHANGE!!!!!!!!!!!!! SWAP LINES BELOW




	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'index'));
	//Router::connect('/', array('controller' => 'posts', 'action' => 'index'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 *..Enter Page Routes Here (LP) Last Edited 2/17/15 Like below for any page
 */

	Router::connect('/index', array('controller' => 'pages', 'action' => 'display', 'index'));

	Router::connect('/about', array('controller' => 'pages', 'action' => 'display', 'about'));
	Router::connect('/contact_us', array('controller' => 'pages', 'action' => 'display', 'contact_us'));
	Router::connect('/contact_politician', array('controller' => 'pages', 'action' => 'display', 'contact_politician'));
	Router::connect('/calendar', array('controller' => 'pages', 'action' => 'display', 'calendar'));
	Router::connect('/bills', array('controller' => 'pages', 'action' => 'display', 'bills'));
	Router::connect('/discussion', array('controller' => 'pages', 'action' => 'display', 'discussion'));
	Router::connect('/login', array('controller' => 'pages', 'action' => 'display', 'login'));
	Router::connect('/signup', array('controller' => 'pages', 'action' => 'display', 'signup'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
