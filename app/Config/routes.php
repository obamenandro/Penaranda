<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/about-us', array('controller' => 'pages', 'action' => 'display', 'about-us'));
	Router::connect('/alcaldez', array('controller' => 'pages', 'action' => 'display', 'alcaldez'));
	Router::connect('/gallery', array('controller' => 'pages', 'action' => 'display', 'gallery'));
	Router::connect('/government', array('controller' => 'pages', 'action' => 'display', 'government'));
	Router::connect('/admin/login', array('controller' => 'pages', 'action' => 'display', 'admin_login'));
	Router::connect('/admin/projects/add', array('controller' => 'pages', 'action' => 'display', 'admin_add_projects'));
	Router::connect('/admin/projects/view', array('controller' => 'pages', 'action' => 'display', 'admin_view_projects'));
	Router::connect('/admin/projects/edit', array('controller' => 'pages', 'action' => 'display', 'admin_edit_projects'));
	Router::connect('/admin/about-us/add', array('controller' => 'pages', 'action' => 'display', 'admin_add_aboutus'));
	Router::connect('/admin/about-us/view', array('controller' => 'pages', 'action' => 'display', 'admin_view_aboutus'));
	Router::connect('/admin/about-us/edit', array('controller' => 'pages', 'action' => 'display', 'admin_edit_aboutus'));
	Router::connect('/admin/alcaldez/add', array('controller' => 'pages', 'action' => 'display', 'admin_add_alcaldez'));
	Router::connect('/admin/alcaldez/view', array('controller' => 'pages', 'action' => 'display', 'admin_view_alcaldez'));
	Router::connect('/admin/alcaldez/edit', array('controller' => 'pages', 'action' => 'display', 'admin_edit_alcaldez'));
	Router::connect('/admin/gallery/add', array('controller' => 'pages', 'action' => 'display', 'admin_add_gallery'));
	Router::connect('/admin/gallery/view', array('controller' => 'pages', 'action' => 'display', 'admin_view_gallery'));
	Router::connect('/admin/gallery/edit', array('controller' => 'pages', 'action' => 'display', 'admin_edit_gallery'));	
	/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */

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
