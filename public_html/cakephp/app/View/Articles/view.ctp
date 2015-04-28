<?php
    App::import('Controller', 'Users');
?>
<h1><?php echo $article['Article']['title']; ?></h1>

<?php echo $this->HTML->link('Create an article post', array('controller' => 'posts', 'action'=> 'add', $article['Article']['id'])); ?>
<br>
<table>
<tr><td>Sr. No.</td><td>User</td><td>Post</td></tr>
<?php
    $counter = 1;
    foreach($article['Post'] as $post) {
      $ucontroller = new UsersController;
      $uname = $ucontroller->getUsernameById($post['user_id']);
      echo "<tr><td>".$counter."</td><td>".$uname['User']['username']."</td><td>".$post['body']."</td></tr>";
      $counter++;
    }
?>
</table>
