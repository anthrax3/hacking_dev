<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List User Tokens'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="userTokens form large-9 medium-8 columns content">
    <?= $this->Form->create($userToken) ?>
    <fieldset>
        <legend><?= __('Add User Token') ?></legend>
        <?php
            echo $this->Form->control('user_id');
            echo $this->Form->control('token');
            echo $this->Form->control('deleted', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
