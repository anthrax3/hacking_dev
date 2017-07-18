<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\UserToken[]|\Cake\Collection\CollectionInterface $userTokens
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User Token'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="userTokens index large-9 medium-8 columns content">
    <h3><?= __('User Tokens') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($userTokens as $userToken): ?>
            <tr>
                <td><?= $this->Number->format($userToken->id) ?></td>
                <td><?= $this->Number->format($userToken->user_id) ?></td>
                <td><?= h($userToken->created) ?></td>
                <td><?= h($userToken->deleted) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $userToken->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userToken->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userToken->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userToken->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
