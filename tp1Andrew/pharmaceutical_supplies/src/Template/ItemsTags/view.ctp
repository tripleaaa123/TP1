<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemsTag $itemsTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Items Tag'), ['action' => 'edit', $itemsTag->item_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Items Tag'), ['action' => 'delete', $itemsTag->item_id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemsTag->item_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Items Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Items Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itemsTags view large-9 medium-8 columns content">
    <h3><?= h($itemsTag->item_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $itemsTag->has('item') ? $this->Html->link($itemsTag->item->name, ['controller' => 'Items', 'action' => 'view', $itemsTag->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $itemsTag->has('tag') ? $this->Html->link($itemsTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $itemsTag->tag->id]) : '' ?></td>
        </tr>
    </table>
</div>
