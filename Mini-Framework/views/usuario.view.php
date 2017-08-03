<?php require 'partials/head.view.php'; ?>
<h1>Usuarios Mostrar</h1>


<ul class="collection">
<?php foreach($usuarios as $usuario): ?>
  <li class="collection-item"><?= $usuario->nombre; ?></li>
<?php endforeach; ?>
</ul>

<?php require 'partials/footer.view.php'; ?>