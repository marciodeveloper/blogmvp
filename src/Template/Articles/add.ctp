<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Article $article
 */
?>

<h1>Adicionar Artigo</h1>
<?php
    echo $this->Form->create($article);
    // just added the categories input
    echo $this->Form->control('category_id');
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    echo $this->Form->button(__('Salvar artigo'));
    echo $this->Form->end();
?>