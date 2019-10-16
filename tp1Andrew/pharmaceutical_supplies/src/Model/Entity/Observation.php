<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Observation Entity
 *
 * @property int $id
 * @property int $item_id
 * @property string $title
 * @property string $observation
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Item $item
 */
class Observation extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'item_id' => true,
        'title' => true,
        'observation' => true,
        'created' => true,
        'modified' => true,
        'item' => true
    ];
}
