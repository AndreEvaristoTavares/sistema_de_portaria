<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Sistema de portaria</title>
</head>
<body>
    <header class="bg-secondary p-3">
        <h1 class="text-white">Login</h1>
    </header>
    <main class="d-flex flex-column justify-content-center align-items-center" style="height: 70vh;">
      <div style="height:70px" class="mt-5">
        <?php
          session_start();
          if (isset($_SESSION['login_erro']) && !empty($_SESSION['login_erro'])) {
              echo '<div style="width:368px" class="alert alert-danger m-3 mt-3" role="alert">' . $_SESSION['login_erro'] . '</div>';
              $_SESSION['login_erro'] = '';
          }
          ?>
      </div>
      <form style="width: 90%; max-width: 368px;" action="../app/controllers/autenticar.php" method="post">
        <div class="form-group">
          <label class="m-2 align-items-center" for="usuario">Login:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
          <label class="m-2 align-items-center" for="usuario">Senha:</label>
            <input type="password" class="form-control" id="usuario" name="senha" required>
        </div>
        <button class="btn btn-dark"  type="submit">Login</button>
      </form>
        
    </main>
</body>
</html>
</html>