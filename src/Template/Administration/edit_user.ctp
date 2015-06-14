     <?php $this->start('nav_center_top'); ?>
          <div class="header-top-nav-center">
            <ul class="nav-top-center">
                <li ><?= $this->Html->link(__('Bookmarks'), ['action' => 'index']) ?></li>
                 <li><?= $this->Html->link(__('Tags'), ['action' => 'tags']) ?></li>
                 <li class="active"><?php echo __('Users'); ?></li>
            </ul>
          </div>

        <?php $this->end(); ?>
        <?php $this->start('nav_left_top'); $this->end(); ?>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete_user', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('New User'), [ 'action' => 'add_user']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php

       // debug($user);exit;
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            $role = ( !empty($user->role) && $user->role === 'admin' ) ? $this->Form->input('role', ['type' => 'checkbox', 'value'=>'admin', 'checked'=>'true' ]) : $this->Form->input('role', ['type' => 'checkbox', 'value'=>'admin' ]).$this->Form->input('role', ['type' => 'hidden', 'value'=>'user' ]);
            echo $role;
            echo $this->Form->input('password',['value' => '','label' => ['id' => 'show_password', 'text' => 'Password (Show password)']] );
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<script>