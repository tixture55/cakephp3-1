    <?php $this->start('nav_center_top'); ?>
      <div class="header-top-nav-center">
        <ul class="nav-top-center">
            <li class="active"><?= $this->Html->link(__('Bookmarks'), ['action' => 'index']) ?></li>
             <li><?= $this->Html->link(__('Tags'), ['action' => 'tags']) ?></li>
            <li><?= $this->Html->link(__('Users'), ['action' => 'users']) ?></li>
        </ul>
      </div>
    <?php $this->end(); ?>

    <?php $this->start('nav_left_top'); $this->end(); ?>

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Bookmarks'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="bookmarks form large-10 medium-9 columns">
    <?= $this->Form->create($bookmark) ?>
    <fieldset>
        <legend><?= __('Add Bookmark') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('title');
            echo $this->Form->input('description');
            echo $this->Form->input('url');
            echo $this->Form->input('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
