<?php
class ArticlesController extends AppController {

    public function latest() {
        $this->findNewArticles();
    }

    protected function findNewArticles() {
        // Logic to find latest news articles
    }
  
  	public function index() {
        $this->set('articles', $this->Article->find('all'));
    }

    public function view($id) {
        if (!$id) {
            throw new NotFoundException(__('Invalid article'));
        }

        $article = $this->Article->findById($id);
        if (!$article) {
            throw new NotFoundException(__('Invalid article'));
        }
        $this->set('article', $article);
    }

    public function add() {
        if ($this->request->is('article')) {
            $this->Article->create();
            if ($this->Article->save($this->request->data)) {
                $this->Session->setFlash(__('Your article has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your article.'));
        }
    }

    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid article'));
    }

    $article = $this->Article->findById($id);
    if (!$article) {
        throw new NotFoundException(__('Invalid article'));
    }

    if ($this->request->is(array('article', 'put'))) {
        $this->Article->id = $id;
        if ($this->Article->save($this->request->data)) {
            $this->Session->setFlash(__('Your article has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your article.'));
    }

    if (!$this->request->data) {
        $this->request->data = $article;
    }
}
    public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Article->delete($id)) {
        $this->Session->setFlash(
            __('The article with id: %s has been deleted.', h($id))
        );
    } else {
        $this->Session->setFlash(
            __('The article with id: %s could not be deleted.', h($id))
        );
    }
    /* Test once article can be viewed AD 1/31
    public function delete() {
        if ($this->Article->delete($this->request->data('Article.id')) {
            $this->Session->setFlash('Article deleted.');
            return $this->redirect(array('action' => 'index'));
        }
    }
    */
    return $this->redirect(array('action' => 'index'));
}

}
?>