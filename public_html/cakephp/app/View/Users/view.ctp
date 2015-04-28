<div class="users view">
<h2><?php echo __('User'); ?></h2>
    <d1>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($user['User']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Username'); ?></dt>
        <dd>
            <?php echo h($user['User']['username']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Password'); ?></dt>
        <dd>
            <?php echo h($user['User']['password']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('First Name'); ?></dt>
        <dd>
            <?php echo h($user['User']['first_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Last Name'); ?></dt>
        <dd>
            <?php echo h($user['User']['last_name']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Email'); ?></dt>
        <dd>
            <?php echo h($user['User']['email']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Role'); ?></dt>
        <dd>
            <?php echo h($user['User']['role']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($user['User']['created']); ?>
            &nbsp;
        </dd>
      </d1>
    </div>
    <div class="actions">
        <h3><?php echo __('Actions'); ?></h3>
