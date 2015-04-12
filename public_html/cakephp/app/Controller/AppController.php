<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */


class AppController extends Controller {
    public $helpers = array('Form', 'Html', 'Session');
    public $components = array(
        'DebugKit.Toolbar', 'Session', 'Acl',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'users',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'display',
                'index'
            ),
            'authorize' => array(
              'Actions' => array('actionPath' => 'controllers')
            ) // Added this line
          )
    );
          /*'Auth' => array('authenticate' => array('Form' => array( 'userModel' => 'User',
                                              'fields' => array(
                                                                  'username' => 'username',
                                                                  'password' => 'password'
                                                                  )
                                                          )
                                      ),
                              'authorize' => array('Controller'),
                              'loginAction' => array('controller' => 'users', 'action' => 'index'),
                              'loginRedirect' => array('controller' => 'users', 'action' => 'index'),
                              'logoutRedirect' => array('controller' => 'users', 'action' => 'index'),
                              'authError' => 'You must be logged in to view this page.',
                              'loginError' => 'Invalid Username or Password entered, please try again.',
                      ),
                  );
*/
          // allow to view without logging in
      public function beforeFilter() {
          $this->Auth->allow('index', 'display', 'view');
          $user = $this->Auth->user();
          if($user != null)
          {
              $this->Session->write('username', $user['username']);
          }

        }

      public function isAuthorized($user) {
          // Here is where we should verify the role and give access based on role
          // Admin can access every action
              if (isset($user['role']) && $user['role'] === '2') {
                  return true;
              }

              // Default deny
              return false;
            }
}
?>
