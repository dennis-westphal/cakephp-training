<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Topic Entity
 *
 * @property int $id
 * @property int $author_id
 * @property string $title
 * @property string $teaser
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Presentation[] $presentations
 */
class Topic extends Entity
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
        '*' => true,
        'id' => false
    ];

    public function userIsAuthor(int $userId) {
        return $userId === $this->author_id;
    }
}
