<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap4/css/bootstrap.min.css">
    <title>Sistema de portaria</title>
</head>
<body>
    <header class="bg-secondary p-3">
        <h1 class="text-white">Login</h1>
    </header>
    <main class="d-flex flex-column justify-content-center align-items-center" style="height: 70vh;">
      <form style="width: 90%; max-width: 512px; height: 400px" action="./back-end/autenticar.php" method="post">
        <div class="form-group">
          <label class="m-2 align-items-center" for="usuario">Login:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" required>
        </div>
        <div class="form-group">
          <label class="m-2 align-items-center" for="usuario">Login:</label>
            <input type="text" class="form-control" id="usuario" name="senha" required>
        </div>
        <button class="btn btn-dark"  type="submit">Login</button>
      <?php
        session_start();
        if (isset($_SESSION['login_erro']) && !empty($_SESSION['login_erro'])) {
            echo '<div class="alert alert-danger m-2" role="alert">' . $_SESSION['login_erro'] . '</div>';
            $_SESSION['login_erro'] = '';
        }
        ?>
      </form>
        
    </main>
</body>
</html>
</html>