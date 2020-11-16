<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TblAnmelden[]|\Cake\Collection\CollectionInterface $tblAnmelden
 */
?>
<div class="tblAnmelden index content">
    <?= $this->Html->link(__('New Tbl Anmelden'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Tbl Anmelden') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('Passwort') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($tblAnmelden as $tblAnmelden): ?>
                <tr>
                    <td><?= $this->Number->format($tblAnmelden->ID) ?></td>
                    <td><?= h($tblAnmelden->email) ?></td>
                    <td><?= h($tblAnmelden->Passwort) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $tblAnmelden->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tblAnmelden->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tblAnmelden->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $tblAnmelden->ID)]) ?>
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
