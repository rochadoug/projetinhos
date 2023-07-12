<?php
require_once('requireall.php');

$ranking = new Ranking();
$CharArray = $ranking->carregarRanking();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Konvict Estudo</title>

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

   <link type="text/css" rel="stylesheet" href="css/estilos.css">

   <script src="https://code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
   <script src="scripts/_script.js"></script>
</head>

<body>
   <div class="navbar navbar-expand-sm fixed-top">
      <h1>
         <?= SERVER_TITLE ?>
      </h1>
   </div>

   <!-- Top 1 -->
   <div id="alertS" class="alert alert-secondary alert-dismissible text-center">
      <button type="button" id="btn1" class="close">
         &times;
      </button>
      <h6>Top 1 RR</h6>
      <img src="img/escudo.jpg" alt="" class="img-fluid">
      <p>
         <?php echo $CharArray[0][0] ?>
      </p>
   </div>

   <div class="container">
      <div class="row">
         <div class="col-md-3">
            <div class="row">
               <div class="col">

                  <div class="card bg-info mt-2">
                     <div class="card-header painel text-center">
                        Painel Usuáro
                     </div>
                     <div class="card-body ">
                        <form action="">
                           <label for="user">Login:</label>
                           <input type="text" name="user" id="user">
                           <label for="pass">Senha:</label>
                           <input type="password" name="pass" id="pass">
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col">
                  <div class="card bg-info mt-2">
                     <div class="card-header painel text-center">
                        Informações
                     </div>
                     <div class="card-body ">
                        <ul class="info-card">
                           <li>Exp: 50%</li>
                           <li>Versão: 97d+99</li>
                           <li>Exp: 50%</li>
                           <li>Exp: 50%</li>
                           <li>Exp: 50%</li>
                           <li>Soul Luck Rate: 70%</li>
                           <li>Life: 50%</li>
                           <li>Lvl Pontos SM/BK/ME: 5</li>
                           <li>Lvl Pontos MG: 7</li>
                        </ul>
                     </div>
                  </div>
               </div>

            </div>

         </div>

         <div class="col-md-7">
            <div class="card mt-2 bg-dark">
               <div class="card-header painel">
                  Ranking
               </div>
               <div class="card-body">
                  <table class="table table-bordered table-striped table-secondary">
                     <thead class="thead thead-dark">
                        <th>Rank</th>
                        <th>Nome</th>
                        <th>Resets</th>
                     </thead>
                     <?php foreach ($CharArray as $k => $per) { ?>
                        <tr>
                           <td>
                              <?php echo $k + 1 ?>
                           </td>
                           <td>
                              <?php echo $per[0] ?>
                           </td>
                           <td>
                              <?php echo $per[1] ?>
                           </td>
                        </tr>
                     <?php } ?>
                  </table>
               </div>
            </div>
         </div>
         <div class="col-md-2">
            <ul class="nav nav-tabs flex-column bg-info p-2 mt-2">
               <li class="nav-item">
                  <a href="" class="nav-link ">Início</a>
               </li>
               <li class="nav-item">
                  <a href="" class="nav-link">Cadastro</a>
               </li>
               <li class="nav-item">
                  <a href="" class="nav-link">Donwload</a>
               </li>
            </ul>


         </div>
      </div>
   </div>
   <div class="footer">

   </div>

</body>

</html>