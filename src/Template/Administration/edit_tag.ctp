
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

<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete_tag', $tag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('New Tag'), [ 'action' => 'add_tag']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'tags']) ?></li>
    </ul>
</div>
<div class="tags form large-10 medium-9 columns">
    <?= $this->Form->create($tag) ?>
    <fieldset>
        <legend><?= __('Edit Tag') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('bookmarks._ids', ['options' => $bookmarks]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
