<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         CakePHP(tm) v 2.4.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AbstractPasswordHasher', 'Controller/Component/Auth');
App::uses('Security', 'Utility');

/**
 * Blowfish password hashing class.
 *
 * @package       Cake.Controller.Component.Auth
 */
class BlowfishPasswordHasher extends AppController{

        public $components = array(
            'Auth' => array(
                'authenticate' => array(
                    'Form' => array(
                        'passwordHasher' => 'Blowfish'
                        )
                    )
                )
            );
    }
?>
