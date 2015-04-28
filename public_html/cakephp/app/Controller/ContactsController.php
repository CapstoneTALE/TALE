<?php

class ContactsController extends AppController {
    var $name = 'Contact';
    var $uses = 'Contact';
    var $helpers = array('Html', 'Form', 'Js');
    var $components = array('Email', 'Session', 'RequestHandler');


    function index() {
    if ($this->RequestHandler->isPost()) {
        $this->Contact->set($this->data);
        if ($this->Contact->validates()) {
            //send email using the Email component
            $this->Email->to = 'talecapstone@gmail.com';
            //$this->Email->subject = 'Contact message from ' . $this->data['Contact']['name'];
            $this->Email->subject = 'Contact Form: '.$this->data['Contact']['subject'];
            //$this->Email->from = $this->data['Contact']['email'];
            $this->Email->from = $this->data['Contact']['name'].' <'.$this->data['Contact']['email'].'>';
            $this->Email->send($this->data['Contact']['message']);
        }
    }
}


}
?>
