 <div class="container">
        <div class="row">

 <div class="actions col-lg-3 col-md-4">

<?php
$loguser = $this->request->session()->read('Auth.User');

//debug($bookmarks);exit;
$this->start('nav_left_top');
?>

<?php $this->end(); ?>

    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
       <li><?= $this->Html->link(__('Home'), ['action' => 'index']) ?></li>
       <?php if($loguser['role'] == 'admin'): ?>
        <li><?= $this->Html->link(__('Admin panel'), ['controller'=> 'administration','action' => 'index']) ?></li>
       <?php endif; ?>
    </ul>
</div>
<div class="bookmarks index col-lg-9 col-md-8">

<div class="row">
<div class="col-md-2">
Sort by:
</div>

<div class="col-md-1">
<?= $this->Paginator->sort('title') ?>
</div>

<div class="col-md-1">
<?= $this->Paginator->sort('created') ?>
</div>

<div class="col-md-1">
<?= $this->Paginator->sort('modified') ?>
</div>
</div>

    <?php foreach ($bookmarks as $bookmark): ?>
        <!-- <tr>
            <td><?= $this->Number->format($bookmark->id) ?></td>
            <td>
                <?= $bookmark->has('user') ? $this->Html->link($bookmark->user->name, ['controller' => 'Users', 'action' => 'view', $bookmark->user->id]) : '' ?>
            </td>
            <td><?= h($bookmark->title) ?></td>
            <td><?= h($bookmark->created) ?></td>
            <td><?= h($bookmark->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $bookmark->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bookmark->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bookmark->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->id)]) ?>
            </td>
        </tr> -->

<div class="col-md-12">
<h4><?= $this->Html->link( h($bookmark->title) , ['action' => 'view', $bookmark->id]) ?></h4>
<div><?= $this->Text->truncate(
            h($bookmark->description),
            350,
            array(
                'ellipsis' => '...',
                'exact' => false
            )
        ); ?></div>
<div class="row">
    <div class="col-md-4">Date: <?= h($bookmark->created) ?></div>
     <div class="col-md-4">Modified: <?= h($bookmark->created) ?></div>

<div>

</div>
<hr />

    <?php endforeach; ?>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>




</div>
    </div>

    </div>
