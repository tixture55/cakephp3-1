   <div class="actions columns large-2 medium-3">

    <?php $this->start('nav_center_top'); ?>
      <div class="header-top-nav-center">
        <ul class="nav-top-center">
            <li class="active"><?php echo __('Bookmarks'); ?></li>
             <li><?= $this->Html->link(__('Tags'), ['action' => 'tags']) ?></li>
            <li><?= $this->Html->link(__('Users'), ['action' => 'users']) ?></li>

        </ul>
      </div>

    <?php $this->end(); ?>
    <?php $this->start('nav_left_top'); $this->end(); ?>

    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Bookmark'), ['action' => 'add_bookmark']) ?></li>
    </ul>
</div>
<div class="bookmarks index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('title') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($bookmarks as $bookmark): ?>
        <tr>
            <td><?= $this->Number->format($bookmark->id) ?></td>
            <td>
                <?= $bookmark->has('user') ? $this->Html->link($bookmark->user->name, ['controller' => 'Users', 'action' => 'view', $bookmark->user->id]) : '' ?>
            </td>
            <td><?= h($bookmark->title) ?></td>
            <td><?= h($bookmark->created) ?></td>
            <td><?= h($bookmark->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'bookmarks', 'action' => 'view', $bookmark->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit_bookmark', $bookmark->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'bookmark_delete', $bookmark->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->id)]) ?>
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
