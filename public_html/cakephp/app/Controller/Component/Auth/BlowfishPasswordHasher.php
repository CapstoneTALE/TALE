<?php
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