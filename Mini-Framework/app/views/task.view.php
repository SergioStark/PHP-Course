<?php require 'partials/head.view.php'; ?>

<h1><?= $title; ?></h1>

<ul class="collection">
<?php foreach($tasks as $task): ?>
  <li class="collection-item"><?= $task->description; ?></li>
<?php endforeach; ?>
</ul>

<div class="row">
    <form class="col s12" method="POST" action="/task">
      <div class="row">
        <div class="input-field col s12">
          <input id="description" name="description" type="text" class="validate">
          <label for="description">Ingresa la tarea</label>
        </div>
      </div>
  <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
  </button>            
    </form>
  </div>

<?php require 'partials/footer.view.php'; ?>