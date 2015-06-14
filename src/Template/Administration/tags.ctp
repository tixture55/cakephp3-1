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
        <li><?= $this->Html->link(__('New Tags'), ['action' => 'add_tag ']) ?></li>
    </ul>
</div>
<div class="tags index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tags as $tag): ?>
        <tr>
            <td><?= $this->Number->format($tag->id) ?></td>
            <td><?= h($tag->title) ?></td>
            <td><?= h($tag->created) ?></td>
            <td><?= h($tag->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $tag->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit_tag', $tag->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete_tag', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
