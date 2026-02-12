<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Game Entity
 *
 * @property int $id
 * @property string|null $image
 * @property string $title
 * @property string|null $description
 * @property \Cake\I18n\Date|null $created
 * @property \Cake\I18n\Date|null $modified
 * @property int|null $active
 */
class Game extends Entity
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
        'description' => true,
        'created' => true,
        'modified' => true,
        'active' => true,
    ];
}
