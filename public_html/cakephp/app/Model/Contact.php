<?php
//App::uses('AppModel', 'Model');
//App::uses('AuthComponent', 'Controller/Component');

class Contact extends AppModel {

    var $name = 'Contact';
    var $useTable = false; //Not using database

    var $validate = array(

        'name' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A name is required'
            ),
            'min_length' => array(
                'rule' => array('minLength', '2'),
                'message' => 'Name must have a mimimum of 2 characters'
            )
        ),
        'email' => array(
            'required' => array(
                'rule' => array('email', true),
                'message' => 'Please provide a valid email address.'
            ),
            'between' => array(
                'rule' => array('between', 6, 60),
                'message' => 'Emails must be between 6 to 60 characters'
            )
        ),
        'subject' => array(
            'rule' => 'notEmpty'
        ),
        'message' => array(
            'rule' => 'notEmpty'
        )

    );

    
    var $_schema = array(
        'name' => array('type' => 'string', 'length' => 60),
        'email' => array('type' => 'text', 'length' => 60),
        'message' => array('type' => 'text', 'length' => 2000),
        'subject' => array('type' => 'string', 'length' => 100),
    );

  }
  ?>
