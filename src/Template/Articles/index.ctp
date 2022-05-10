<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category[]|\Cake\Collection\CollectionInterface $categories
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Novo Artigo'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Categorias'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nova Categoria'), ['action' => 'add']) ?></li>
        
        
    </ul>
</nav>
<div class="categories index large-9 medium-8 columns content">
    <h3><?= __('Artigos') ?></h3>

    <?= $this->Html->link('Adicionar artigo', ['action' => 'add']) ?>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('create') ?></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $article->id ?></td>
                <td>
                    <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
                </td>
                <td>
                    Categoria
                </td>
                <td>
                    <?=
                        $request = $article->created; 
                        $date = new DateTime($request);
                        $date->format('d/m/Y  H:i') ?>
                </td>
                <td>
                    <?= $this->Form->postLink(
                        'Deletar',
                        ['action' => 'delete', $article->id],
                        ['confirm' => 'Tem certeza?'])
                    ?>
                    <?= $this->Html->link('Edit', ['action' => 'edit', $article->id]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} registro(s) de {{count}} total')]) ?></p>
    </div>
</div>