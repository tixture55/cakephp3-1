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
        <li><?= $this->Html->link(__('List Users'), ['action' => 'users']) ?></li>
    </ul>
</div>
<div class="users form large-10 medium-9 columns">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('email');

                  echo $this->Form->input('role', ['type' => 'checkbox', 'value'=>'admin', ]);

            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
