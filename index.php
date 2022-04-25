<!-- Header -->
<?php include "header.php" ?>

<!-- body -->
<div class="container mt-4">
    <h1 class="text-center">Sistema Facultativo</h1>
        <p class="text-center">
           Materias a Cursar
        </p>
  <div class="container">
    <form action="calculo.php" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Calculo III">
        </div>
    </form>
    <form action="estadistica.php" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Estadistica II">
        </div>
    </form>
    <form action="operativa.php" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Investigacion Operativa II">
        </div>
    </form>    
    <form action="algebra.php" method="post">
        <div class="from-group text-center">
            <input type="submit" class="btn btn-primary mt-2" value="Algebra I">
        </div>
    </form>
  </div>
</div>

<!-- Footer -->