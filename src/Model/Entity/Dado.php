<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dado Entity
 *
 * @property int $id
 * @property string $compradores
 * @property string $descricao
 * @property string $preco_unitario
 * @property int $quantidade
 * @property string $endereco
 * @property string $fornecedor
 */
class Dado extends Entity
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
    protected $_accessible = [
        'compradores' => true,
        'descricao' => true,
        'preco_unitario' => true,
        'quantidade' => true,
        'endereco' => true,
        'fornecedor' => true,
    ];
}
