<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemsTag $itemsTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $itemsTag->item_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $itemsTag->item_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Items Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itemsTags form large-9 medium-8 columns content">
    <?= $this->Form->create($itemsTag) ?>
    <fieldset>
        <legend><?= __('Edit Items Tag') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
