<!DOCTYPE html>
<html lang="en">
<head>
<title><?= h($this->fetch('title')) ?></title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<!-- Inclui arquivos externos e scripts aqui. (Veja HTML helper para mais informações.) -->
<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
<body>

<!-- Se você quiser algum tipo de menu para mostrar no topo
de todas as suas *views*, inclua isso aqui -->
<div id="header">
    <div id="menu">...</div>
</div>

<!-- Aqui é onde eu quero que minhas views sejam exibidas -->
<?= $this->fetch('content') ?>

<!-- Adicione um rodapé para cada página exibida -->
<div id="footer">...</div>

</body>
</html>