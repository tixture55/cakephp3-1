<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
$loguser = $this->request->session()->read('Auth.User');
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <?= $this->Html->script('main') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="header-title">
            <span><?= $this->fetch('title') ?></span>
        </div>

          <?= $this->fetch('nav_center_top') ?>

        <div class="header-help">
         <?= $this->fetch('nav_left_top') ?>
            <?php if(empty($loguser)): ?>
            <span><?php echo $this->Html->link(__('Login'), '/login'); ?></span>
            <span><?php echo $this->Html->link(__('Registration'), '/registration'); ?></span>
            <?php else: ?>
            <span><?php echo $this->Html->link($loguser['name'].' ('.$loguser['role'].') ','');  ?> </span>
            <span><?php echo $this->Html->link(__('Logout'), '/logout'); ?></span>
            <?php endif; ?>
        </div>





    </header>
    <div id="container">

        <div id="content">
            <?= $this->Flash->render('auth') ?>



            <div class="row">
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
    </div>



</body>
</html>
