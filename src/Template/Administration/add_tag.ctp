   <div class="actions columns large-2 medium-3">

    <?php $this->start('nav_center_top'); ?>
      <div class="header-top-nav-center">
        <ul class="nav-top-center">
            <li ><?= $this->Html->link(__('Bookmarks'), ['action' => 'index']) ?></li>
             <li class="active"><?php echo __('Tags'); ?></li>
            <li><?= $this->Html->link(__('Users'), ['action' => 'users']) ?></li>

        </ul>
      </div>

    <?php $this->end(); ?>
    <?php $this->start('nav_left_top'); $this->end(); ?>

    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'tags ']) ?></li>
    </ul>
</div>

<div class="tags form large-10 medium-9 columns">
    <?= $this->Form->create($tag) ?>
    <fieldset>
        <legend><?= __('Add Tag') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('bookmarks._ids', ['options' => $bookmarks]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
