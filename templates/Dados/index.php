<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Dado> $dados
 */
?>
<div class="dados index content">
        <div style="display: inline-block;">
            <?= $this->Html->link(__('Inserir dado'), ['action' => 'add'], ['class' => 'button float-right']) ?>
        </div>
        <div style="display: inline-block; margin-left: 10px;">
            <?= $this->Html->link(__('Carregar dado'), ['action' => 'upload'], ['class' => 'button float-right']) ?>
        </div>
    
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
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dados as $dado): ?>
                <tr>
                    <td><?= $this->Number->format($dado->id) ?></td>
                    <td><?= h($dado->compradores) ?></td>
                    <td><?='R$ '.h($dado->preco_unitario) ?></td>
                    <td><?= $this->Number->format($dado->quantidade) ?></td>
                    <td><?= h($dado->endereco) ?></td>
                    <td><?= h($dado->fornecedor) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $dado->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $dado->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dado->id], ['confirm' => __('Tem certeza que deseja deletar # {0}?', $dado->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} total')) ?></p>
    </div>
</div>
