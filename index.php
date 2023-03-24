<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="styles.css" rel="stylesheet">
  <link href="dropdown.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
  <title>Controle monetário</title>
</head>

<body>
  <header>
    <h1>Controle monetário</h1>
  </header>
  <div class="nav-bar">
    <form action="home.php" method="post">
      <input type="hidden" name="tipo_registro" value="Registros pessoais">
      <button type="submit" class="nav-bar-selecionado">Registros pessoais</button>
    </form>
    <form action="home.php" method="post">
      <input type="hidden" name="tipo_registro" value="Registros da casa">
      <button type="submit" class="nav-bar-desmarcado">Registros da casa</button>
    </form>
    <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn">Dropdown</button>
      <div id="myDropdown" class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
  </div>
  <form method="POST" action="home.php" class="input-pesquisar">
    <select name="ano">
      <?php
      for ($year = (int)date('Y'); 1900 <= $year; $year--) : ?>
        <option value="<?= $year; ?>" n><?= $year; ?></option>
      <?php endfor; ?>
    </select>
    <button type="submit" class="btn btn-primary">Pesquisar</button>
  </form>
  <div class="gallery">
    <img src='./Img/1.png' alt="january">
    <img src='./Img/february.png' alt="february">
    <img src='./Img/march.png' alt="march">
    <img src='./Img/april.png' alt="april">
    <img src='./Img/may.png' alt="may">
    <img src='./Img/june.png' alt="june">
    <img src='./Img/july.png' alt="July">
    <img src='./Img/august.png' alt="August">
    <img src='./Img/september.png' alt="september">
    <img src='./Img/october.png' alt="october">
    <img src='./Img/november.png' alt="november">
    <img src='./Img/december.png' alt="december">
    <img src='./Img/savings.png' alt="savings">
  </div>
  <footer>
    Tiago Universe, PE 2023.
  </footer>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
</body>

</html>