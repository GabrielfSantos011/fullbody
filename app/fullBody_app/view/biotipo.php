<?php
    include("protect/protect.php");
    $idUser = $_SESSION["idUser"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/biotipo.css">
  <title>Biotipo</title>
</head>

<body class="bg-black d-flex flex-column">
  <nav class=" navbar bg-dark navbar-expand-lg navbar-dark bg-light text-center">
    <div class="container py-1">
      <a class="navbar-brand d-flex align-items-center fw-semibold " href="#">
        <img src="img/icon.png" alt="login-icon" style="height: 3.5rem">
        FullBody </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="https://fullbodyproject.blogspot.com/" class="nav-link fw-semibold custom-button text-start">Blog</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#" class="nav-link btn btn-link fw-semibold custom-button">Biotipo</a>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a href="#" class="nav-link dropdown-toggle fw-semibold text-end" data-bs-toggle="dropdown" style="margin-left: 2rem;">Exercicios</a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#" class="dropdown-item">Superiores</a>
                </li>
                <li>
                  <a href="#" class="dropdown-item">Inferiores</a>
                </li>
                <li>
                  <a href="#" class="dropdown-item">Corpo Inteiro</a>
                </li>
                <li>
                  <a href="#" class="dropdown-item">Cardio</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link btn btn-link fw-semibold custom-button" style="margin-left: 2rem;">Perfil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container bg-white p-5 rounded-5 text-dark shadow mx-auto mt-5 " style="width: 34rem">
    <div class="text-center">
      <h2>Teste de Biotipo</h2>
      <div class="mt-4">
        <img src="img/teste.jpg" alt="">
      </div>
      <p class="mt-4">Informaçoes para fazer o teste</p>
    </div>

    <form class="mt-5" action="/biotipo" method="POST">
      <div class="mb-3">
        <label for="biotipoSelect" class="form-label">Selecione seu biotipo:</label>
        <select class="form-select" id="biotipoSelect" name="biotipo">
          <option value="ectomorfo">Ectomorfo</option>
          <option value="mesomorfo">Mesomorfo</option>
          <option value="endomorfo">Endomorfo</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="alturaInput" class="form-label">Altura:</label>
        <input type="text" class="form-control" id="alturaInput" name="altura">
      </div>
      <div class="mb-3">
        <label for="pesoInput" class="form-label">Peso:</label>
        <input type="text" class="form-control" id="pesoInput" name="peso">
      </div>
      <input name="action" type="hidden" value="sendBiotipo">
      <input name="id" type="hidden" value="<?=$idUser?>">
      <button type="submit" class="btn btn-custom-color custom-button fw-semibold shadow-sm" style="color: white; ">Confirmar</button>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>