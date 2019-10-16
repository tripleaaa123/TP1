<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Observation $observation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Observation'), ['action' => 'edit', $observation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Observation'), ['action' => 'delete', $observation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $observation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Observations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Observation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="observations view large-9 medium-8 columns content">
    <h3><?= h($observation->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $observation->has('item') ? $this->Html->link($observation->item->name, ['controller' => 'Items', 'action' => 'view', $observation->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($observation->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($observation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($observation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($observation->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Observation') ?></h4>
        <?= $this->Text->autoParagraph(h($observation->observation)); ?>
    </div>
</div>
