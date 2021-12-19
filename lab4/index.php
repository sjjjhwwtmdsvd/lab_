<!DOCTYPE html>
<html lang="ru">

<head>
<!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>

<header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Лабораторная работа №4</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">

          </ul>
          <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Поиск" aria-label="Поиск">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
          </form>
        </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
        <h1 class="mt-5">Вычислить значение площади треугольника со сторонами A, B, C. Проверить условие существования треугольника.</h1>
		<form method="post">
			<div class="form-group">
				<label for="inputA">Введите значение А</label>
				<input type="number" class="form-control" id="inputA" name="a" placeholder="Значение А">
			</div>
			<div class="form-group">
				<label for="inputB">Введите значение B</label>
				<input type="number" class="form-control" id="inputB" name="b" placeholder="Значение B">
			</div>
			<div class="form-group">
				<label for="inputC">Введите значение C</label>
				<input type="number" class="form-control" id="inputC" name="c" placeholder="Значение C">
			</div>
			<button type="submit" class="btn btn-primary">Проверисть существование</button>
		</form>
		<?php
			if($_SERVER['REQUEST_METHOD'] == 'POST') {
				$a=$_POST['a'];
				$b=$_POST['b'];
				$c=$_POST['c'];
				if ($a+$b>$c and $a+$c>$b and $b+$c>$a and $a>0 and $b>0 and $c>0){
					$p=($a+$b+$c)/2;
					echo "Треугольник существует <br />Площадь треугольника =";
					$s=$p*($p-$a)*($p-$b)*($p-$c);
					echo $s;
				}
				else
					echo "<p>Треугольник не существует</p>";
			}
		?>
	</main>

    <footer class="footer">

    </footer>
</body>

</html>