<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Observation[]|\Cake\Collection\CollectionInterface $observations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Observation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="observations index large-9 medium-8 columns content">
    <h3><?= __('Observations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($observations as $observation): ?>
            <tr>
                <td><?= $this->Number->format($observation->id) ?></td>
                <td><?= $observation->has('item') ? $this->Html->link($observation->item->name, ['controller' => 'Items', 'action' => 'view', $observation->item->id]) : '' ?></td>
                <td><?= h($observation->title) ?></td>
                <td><?= h($observation->created) ?></td>
                <td><?= h($observation->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $observation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $observation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $observation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $observation->id)]) ?>
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
