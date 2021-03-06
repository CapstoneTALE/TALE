<?php
class Article extends AppModel {
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );

    public function isOwnedBy($article, $user) {
    	return $this->field('id', array('id' => $article, 'user_id' => $user)) !== false;
	}
}
?>
