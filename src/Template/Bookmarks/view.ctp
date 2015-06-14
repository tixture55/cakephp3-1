<div class="actions columns large-2 medium-3">
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

        <h3><?= __('Related Tags') ?></h3>

        <?php if (!empty($bookmark->tags)):
             foreach ($bookmark->tags as $tags): ?>
                 <span class="view-tag-item"> <span class="glyphicon glyphicon-tag"></span> <?= h($tags->title) ?> </span>
            <?php endforeach; ?>

        <?php endif; ?>

</div>
<div class="bookmarks view large-10 medium-9 columns">
    <h2><?= h($bookmark->title) ?></h2>

            <?= $this->Text->autoParagraph(h($bookmark->description)) ?>
</div>
