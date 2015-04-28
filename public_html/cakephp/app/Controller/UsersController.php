<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

    var $name = 'Users';

    public $components = array('Paginator', 'Auth');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('*');
    }

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($id = null) {
      $this->set('users', $this->User->find('all'));

    }

    public function add() {
      if ($this->request->is('post')) {
          $this->User->create();
          if ($this->User->save($this->request->data)) {
              $this->Session->setFlash(__('The user has been saved'));
              return $this->redirect(array('action' => 'index'));
          }
          $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
      }
    }

    public function edit($id = null) {

      if (!$id) {
          throw new NotFoundException(__('Invalid user'));
      }

      $user = $this->User->findById($id);
      if (!$user) {
          throw new NotFoundException(__('Invalid user'));
      }

      if ($this->request->is(array('post', 'put'))) {
          $this->User->id = $id;
          if ($this->User->save($this->request->data)) {
              $this->Session->setFlash(__('Your User has been updated.'));
              return $this->redirect(array('action' => 'index'));
          }
          $this->Session->setFlash(__('Unable to update the user.'));
      }

      if (!$this->request->data) {
          $this->request->data = $user;
  }

    }

    public function delete($id = null) {
      if ($this->request->is('post')) {
          throw new MethodNotAllowedException();
      }
      if ($this->User->delete($id)) {
          $this->Session->setFlash(__('The User with id: %s has been deleted.', h($id)));
          return $this->redirect(array('action' => 'index'));
      }
          $this->Session->setFlash(__('User was not deleted'));
          return $this->redirect(array('action' => 'index'));
      }


    public function getUsernameById($id) {
      $data = $this->User->findById($id);
      return $data;
    }

    public function login() {

       if ($this->Session->read('Auth.User')) {
        $this->Session->setFlash('You are logged in!');
        return $this->redirect('/');
    }

        // if we get the post information, try to authenticate
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                //$this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('Invalid username or password'));
            }
        }
    }

    public function logout() {
      $this->Session->setFlash('Good-Bye');
      return $this->redirect($this->Auth->logout());
      }
}
?>
