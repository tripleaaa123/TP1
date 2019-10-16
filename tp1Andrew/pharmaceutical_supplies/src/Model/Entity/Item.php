<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property int $cost
 * @property string $slug
 * @property string|null $description
 * @property bool|null $published
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Observation[] $observations
 * @property \App\Model\Entity\File[] $files
 * @property \App\Model\Entity\Tag[] $tags
 */
class Item extends Entity
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
        'user_id' => true,
        'name' => true,
        'cost' => true,
        'slug' => true,
        'description' => true,
        'published' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'observations' => true,
        'files' => true,
        'tags' => true
    ];
}
