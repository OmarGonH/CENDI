<main class="bg-green-500">
<div>
    IMAGEN
</div>
  <form method="POST" action="/">
      <?php include_once './../includes/templates/errores.php' ?>
      <div>
          <label for="usuario">Usuario: </label>
          <input type="text" name="usuario" id="usuario" />
      </div>

      <div>
          <label for="password"> Imagen: </label>
          <input type="password" name="password" id="password" />
      </div>
      <button type="submit">Iniciar sesión</button>
  </form>
</main>