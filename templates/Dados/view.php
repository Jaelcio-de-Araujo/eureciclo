<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dado $dado
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Dado'), ['action' => 'edit', $dado->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Dado'), ['action' => 'delete', $dado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dado->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Dados'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Dado'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="dados view content">
            <h3><?= h($dado->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Compradores') ?></th>
                    <td><?= h($dado->compradores) ?></td>
                </tr>
                <tr>
                    <th><?= __('Preco Unitario') ?></th>
                    <td><?= h($dado->preco_unitario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($dado->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fornecedor') ?></th>
                    <td><?= h($dado->fornecedor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($dado->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($dado->quantidade) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Descricao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($dado->descricao)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
