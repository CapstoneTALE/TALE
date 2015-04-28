<!-- File: /app/View/Articles/index.ctp -->

<h1>Articles</h1>
<?php echo $this->HTML->link('Post an Article', array('controller' => 'articles', 'action' => 'add')); ?>
<br>

<?php if(AuthComponent::user()) {
          echo $this->HTML->link('Logout', array('controller' => 'users', 'action' => 'logout'));
      } else {
          echo $this->HTML->link('Login', array('controller' => 'users', 'action' => 'login')) . "or" .$this->HTML->link('Register', array('controller' => 'users', 'action' => 'add'));
      }
          ?>

<table>
    <tr>
        <th>Title</th>
        <th>User Id</th>
        <th>Content</th>
        <th>Created</th>
        <?php if(AuthComponent::user('role') == 2) : ?>
          <th>Role</th>
        <th>Edit</th>
        <th>Delete</th>
        <?php endif;?>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->

    <?php foreach ($articles as $article): ?>
    <tr>
        <?php if(AuthComponent::user('role') == 2) : ?>
        <td><?php echo $this->HTML->link($article['Article']['title'], array('controller' => 'articles', 'action' => 'view', $article['Article']['id'])); ?></td>
        <td><?php echo $article['Article']['username']; ?></td>
        <td><?php echo $article['Article']['created']; ?></td>
        <?php if(AuthComponent::user('role') == 2) : ?>
            <td><?php echo $article['Article']['visible']; ?></td>
        <td><?php echo $this->HTML->link('Edit', array('controller' => 'articles', 'action' => 'edit', $article['Article']['id'])); ?></td>
        <td><?php echo $this->Form->postLink('Delete', array('controller' => 'articles', 'action' => 'delete', $article['Article']['id']), array('confirm' => 'Are you sure?'));?></td>
      <?php endif; ?>
    </tr>
    <?php endif;?>
    <?php if(AuthComponent::user('role') == 1 || !AuthComponent::user()) : ?>
    <!-- <?php //if($article['Article']['visible'] == 1) : ?> -->
      <td><?php echo $this->HTML->link($article['Article']['title'], array('controller' => 'articles', 'action' => 'view', $article['Article']['id'])); ?></td>
      <td><?php echo $article['Article']['username']; ?></td>
      <td><?php echo $article['Article']['created']; ?></td>
      <?php if(AuthComponent::user('role') == 2) : ?>
          <td><?php echo $article['Article']['visible']; ?></td>
      <td><?php echo $this->HTML->link('Edit', array('controller' => 'articles', 'action' => 'edit', $article['Article']['id'])); ?></td>
      <td><?php echo $this->Form->postLink('Delete', array('controller' => 'articles', 'action' => 'delete', $article['Article']['id']), array('confirm' => 'Are you sure?'));?></td>
    <?php endif; ?>
  </tr>






    <?php endforeach; ?>
<?php unset($article); ?>
</table>
