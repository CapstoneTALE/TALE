<?php
class UsersController extends AppController {

    public function index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function view($user_id = null) {
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
 
    public function edit($user_id = null) {
        if (!$user_id) {
            throw new NotFoundException(__('Invalid user'));
        }
    
        $username = $this->User->findById($user_id);
        if (!$username) {
            throw new NotFoundException(__('Invalid user'));
        }
    
        if ($this->request->is(array('post', 'put'))) {
            $this->User->user_id = $user_id;
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Your User has been updated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to update the user.'));
        }
    
        if (!$this->request->data) {
            $this->request->data = $username;
    }
}

    public function delete($user_id) {
        
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }    
    if ($this->User->delete($user_id)) {
        $this->Session->setFlash(__('The User with id: %s has been deleted.', h($user_id)));
        return $this->redirect(array('action' => 'index'));
    }
        $this->Session->setFlash(__('User was not deleted'));
        return $this->redirect(array('action' => 'index'));
    }

    public function login() {
        $this->layout = 'parent';
        if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash(__('Username or password is incorrect'), 'default', array(), 'auth');
        }
    }
    }


    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
    
    public function setDeadline(){
    
    
    }
}
?>