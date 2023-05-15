<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dado> $dados
 */
?>
<div class="dados index content">
    <?= $this->Html->link(__('New Dado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Dados') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('compradores') ?></th>
                    <th><?= $this->Paginator->sort('preco_unitario') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th><?= $this->Paginator->sort('endereco') ?></th>
                    <th><?= $this->Paginator->sort('fornecedor') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $dado): ?>
                <tr>
                    <td><?= $this->Number->format($dado->id) ?></td>
                    <td><?= h($dado->compradores) ?></td>
                    <td><?= h($dado->preco_unitario) ?></td>
                    <td><?= $this->Number->format($dado->quantidade) ?></td>
                    <td><?= h($dado->endereco) ?></td>
                    <td><?= h($dado->fornecedor) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $dado->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dado->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dado->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
