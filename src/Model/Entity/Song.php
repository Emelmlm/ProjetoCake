<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Song Entity
 *
 * @property int $id
 * @property string|null $image
 * @property string $title
 * @property \Cake\I18n\Date|null $created
 * @property \Cake\I18n\Date|null $modified
 * @property int|null $active
 */
class Song extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'image' => true,
        'title' => true,
        'created' => true,
        'modified' => true,
        'active' => true,
    ];
}
